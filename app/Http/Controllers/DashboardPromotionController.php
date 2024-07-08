<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class DashboardPromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('AdminPage.promotions.index', [
            'promotions' => Promotion::all()
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
            'terms' => 'required',
            'shortdecs' => 'required|max:55',
            'startdate' => 'required|date_format:Y-m-d',
            'enddate' => 'required|date_format:Y-m-d',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('promotion-images');
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
        Promotion::where('id', $promotion->id)->update($validatedData);

        return redirect('/dashboard/promotions')->with('success', 'Promotion has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promotion $promotion)
    {
        if($promotion->image){
                Storage::delete($promotion->image);
            }
        Promotion::destroy($promotion->id);

        return redirect('/dashboard/promotions')->with('success', 'Promotion has been deleted!');
    }
}
