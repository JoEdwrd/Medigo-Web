<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> 1]);
        $searchTerm = request('search');
        $productsQuery = Product::query();

        if ($searchTerm) {
            // Fetch products that match the search term
            $productsQuery->where('name', 'like', '%' . $searchTerm . '%');
        }

        // Fetch only existing products from the database
        $products = $productsQuery->get();

        $categories = Category::with('products')->get();
        return view('Product.Products', compact('categories', 'products', 'searchTerm', 'cart'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('Product.product', ['product' => $product]);
    }

    public function showByCategory(Category $category)
    {
        $products = $category->products; // Assuming a Category has many Products
        return view('Product.productsbyCategory', ['category' => $category, 'products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
