<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("AdminPage.products.index",[
            "products"=>Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("AdminPage.products.create",[
            "categories"=>Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // @dd($request->all());
        $validatedData=$request->validate([
            "name"=>"required|max:255|unique:products",
            "slug"=>"required|unique:products",
            "category_id"=>"required",
            "patent"=>"required|boolean",
            "price"=>"required|numeric|min:0",
            "stock"=>"required|numeric|min:0",
            "description"=>"required"
        ]);
        // if($request->file("image")){
        //     $validatedData["image"]=$request->file("image")->store("post-images");
        // }   
        Product::create($validatedData);
        return redirect("/dashboard/products")->with("success","New product has been added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view("AdminPage.products.show",[
            "title"=>"Product Detail",
            // "active"=>"Products",
            "product"=>$product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view("AdminPage.products.edit",[
                "product"=>$product,
                "categories"=>Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
         $rules=[
            "category_id"=>"required",
            "patent"=>"required|boolean",
            "price"=>"required|numeric|min:0",
            "stock"=>"required|numeric|min:0",
            "description"=>"required"
        ];
       
        if($request->slug!=$product->slug){
            $rules["slug"]= "required|unique:products";
        }
        if($request->name!=$product->name){
            $rules["name"]= "required|max:255|unique:products";
        }
        $validatedData=$request->validate($rules);
        //  if($request->file("image")){
        //     if($request->oldImage){
        //         Storage::delete($request->oldImage);
        //     }
        //     $validatedData["image"]=$request->file("image")->store("post-images");
        // }
        Product::where("id",$product->id)
        ->update($validatedData);
        return redirect("/dashboard/products")->with("success","Product has been update!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // if($product->image){
        //         Storage::delete($product->image);
        //     }
        Product::destroy($product->id);
        return redirect("/dashboard/products")->with("success","Post has been deleted!");
    }
}

