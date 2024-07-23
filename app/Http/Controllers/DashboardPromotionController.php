<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;

class DashboardPromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Promotion::query();

        if ($search = $request->input('search')) {
            $query->where('name', 'like', "%{$search}%");
        }

        $promotions = $query->get();

        return view('AdminPage.promotions.index', [
            'promotions' => $promotions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdminPage.promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // @ddd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:promotions',
            'slug' => 'required|unique:promotions',
            'code' => 'required|unique:promotions',
            'discount' => 'required|numeric',
            'image' => 'required|image|file|max:1024',
            'imagebanner' => 'required|image|file|max:1024',
            'terms' => 'required',
            'shortdecs' => 'required|max:55',
            'startdate' => 'required|date_format:Y-m-d',
            'enddate' => 'required|date_format:Y-m-d',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('promotion-images');
        }
        if ($request->file('imagebanner')) {
            $validatedData['imagebanner'] = $request->file('imagebanner')->store('promotionbanner-images');
        }
        Promotion::create($validatedData);

        return redirect('/dashboard/promotions')->with('success', 'New Promotion has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promotion $promotion)
    {
        return view('AdminPage.promotions.show', [
            'promotion' => $promotion
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promotion $promotion)
    {
        return view('AdminPage.promotions.edit', [
            'promotion' => $promotion
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promotion $promotion)
    {
        $rules = [
            'discount' => 'required|numeric',
            'image' => 'image|file|max:1024',
            'imagebanner' => 'image|file|max:1024',
            'terms' => 'required',
            'shortdecs' => 'required|max:55',
            'startdate' => 'required|date_format:Y-m-d',
            'enddate' => 'required|date_format:Y-m-d',
        ];
        
        if ($request->name != $promotion->name) {
            $rules['name'] = 'required|max:255|unique:promotions';
        }
        if ($request->slug != $promotion->slug) {
            $rules['slug'] = 'required|unique:promotions';
        }
        if ($request->code != $promotion->code) {
            $rules['code'] = 'required|unique:promotions';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('promotion-images');
        }
        else{
            $validatedData['image'] = $request->oldImage;
        
        }
        if ($request->file('imagebanner')) {
            if ($request->oldImageBanner) {
                Storage::delete($request->oldImageBanner);
            }
            $validatedData['imagebanner'] = $request->file('imagebanner')->store('promotionbanner-images');
        }
        else{
            $validatedData['imagebanner'] = $request->oldImageBanner;
        
        }
        Promotion::where('id', $promotion->id)->update($validatedData);

        return redirect('/dashboard/promotions')->with('success', 'Promotion has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promotion $promotion)
    {
        try {
            // Attempt to delete the promotion
            if($promotion->image) {
                Storage::delete($promotion->image);
            }
            if($promotion->imagebanner) {
                Storage::delete($promotion->imagebanner);
            }
            Promotion::destroy($promotion->id);
            
            return redirect("/dashboard/promotions")->with('success', 'Promotion deleted successfully.');
        } catch (QueryException $e) {
            // Check if the error is a foreign key constraint violation
            if ($e->getCode() == 23000) {
                return redirect("/dashboard/promotions")->with('error', 'Cannot delete promotion as it is associated with one or more orders.');
            }
            // Tangani kesalahan lain jika perlu
            return redirect("/dashboard/promotions")->with('error', 'An error occurred while trying to delete the promotion.');
        }
    }
}