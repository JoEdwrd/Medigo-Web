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
        $user = auth()->user();
        if($user){
            $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id ]);
        }else{
            $cart = null;
        }
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
        $user = auth()->user();
        if ($user) {
            $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id]);
        } else {
            $cart = null;
        }

        // Retrieve products of the same category as the current product
        $productsInSameCategory = Product::where('category_id', $product->category_id)
                                        ->where('id', '!=', $product->id) // exclude the current product
                                        ->take(4)
                                        ->get();

        return view('Product.product', [
            'product' => $product,
            'cart' => $cart,
            'products' => $productsInSameCategory // pass the products to the view
        ]);
    }


    public function showByCategory(Category $category)
    {
        $user = auth()->user();
        if($user){
            $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id ]);
        }else{
            $cart = null;
        }
        $products = $category->products; // Assuming a Category has many Products
        return view('Product.productsbyCategory', ['category' => $category, 'products' => $products, 'cart' => $cart]);
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
