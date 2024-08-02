<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("AdminPage.categories.index",[
            "categories"=>Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("AdminPage.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ddd($request);
        $validatedData=$request->validate([
            "name"=>"required|max:255|unique:categories",
            "slug"=>"required|unique:categories",
            "image"=>"required|image|file|max:1024",
            "description"=>"required"
        ]);
        if($request->file("image")){
            $validatedData["image"]=$request->file("image")->store("category-images");
        }
        Category::create($validatedData);
        return redirect("/dashboard/categories")->with("success","New category has been added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view("AdminPage.categories.show",[
            "title"=>"Category Detail",
            "category"=>$category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("AdminPage.categories.edit",[
                "category"=>$category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $rules=[
            "description"=>"required",
            "image"=>"image|file|max:1024",
        ];
       
        if($request->slug!=$category->slug){
            $rules["slug"]= "required|unique:categories";
        }
        if($request->name!=$category->name){
            $rules["name"]= "required|max:255|unique:categories";
        }
        $validatedData=$request->validate($rules);
         if($request->file("image")){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData["image"]=$request->file("image")->store("category-images");
        }
        else{
            $validatedData["image"]=$request->oldImage;
        }
        Category::where("id",$category->id)
        ->update($validatedData);
        return redirect("/dashboard/categories")->with("success","Category has been update!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        
        try{
            if($category->image){
                Storage::delete($category->image);
            }
            Category::destroy($category->id);
            return redirect("/dashboard/categories")->with("success","Category has been deleted!");
        }catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                return redirect("/dashboard/categories")->with('error', 'Cannot delete category as it is associated with one or more products.');
            }
            return redirect("/dashboard/categories")->with('error', 'An error occurred while trying to delete the category.');
        }
    }
}
