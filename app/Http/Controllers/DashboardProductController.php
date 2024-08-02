<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::query();

        if ($search = $request->input('search')) {
            $query->where('name', 'like', "%{$search}%");
        }

        $products = $query->get();

        return view('AdminPage.products.index', [
            'products' => $products
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
        // return $request->file("image")->store("product-images");
        // ddd($request);
        $validatedData=$request->validate([
            "name"=>"required|max:255|unique:products",
            "slug"=>"required|unique:products",
            "category_id"=>"required",
            "patent"=>"required|boolean",
            "price"=>"required|numeric|min:0",
            "discprice"=>"numeric|nullable",
            "stock"=>"required|numeric|min:0",
            "shortdesc"=>"required|max:50",
            "description"=>"required",
            "minimizedesc"=>"required",
            "image"=>"required|image|file|max:1024",
        ]);
        if($request->file("image")){
            $validatedData["image"]=$request->file("image")->store("product-images");
        }
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
            "discprice" => "numeric|nullable",
            "shortdesc" => "required|max:50",
            "minimizedesc"=>"required",
            "image"=>"image|file|max:1024",
            "description"=>"required"
        ];

        if($request->slug!=$product->slug){
            $rules["slug"]= "required|unique:products";
        }
        if($request->name!=$product->name){
            $rules["name"]= "required|max:255|unique:products";
        }
        $validatedData=$request->validate($rules);
         if($request->file("image")){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData["image"]=$request->file("image")->store("prod-images");
        }
        else{
            $validatedData["image"]=$request->oldImage;
        }
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
        // }
        // Product::destroy($product->id);
        // return redirect("/dashboard/products")->with("success","Product has been deleted!");

        try {
            if ($product->image) {
                Storage::delete($product->image);
            }
            Product::destroy($product->id);
            return redirect("/dashboard/products")->with("success", "Product has been deleted!");
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                return redirect("/dashboard/products")->with('error', 'Cannot delete product as it is associated with one or more transactions.');
            }
            // Tangani kesalahan lain jika perlu
            return redirect("/dashboard/products")->with('error', 'An error occurred while trying to delete the product.');
        }
    }
}

