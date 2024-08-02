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
        if ($user) {
            $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id' => $user->id]);
        } else {
            $cart = null;
        }

        $searchTerm = request('search');
        $productsQuery = Product::query();

        if ($searchTerm) {
            $productsQuery->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhereHas('category', function ($q) use ($searchTerm) {
                        $q->where('name', 'like', '%' . $searchTerm . '%');
                    });
            });
        }

        $products = $productsQuery->get();

        $categories = Category::with('products')->get();
        return view('Product.Products', compact('categories', 'products', 'searchTerm', 'cart'));
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

        $productsInSameCategory = Product::where('category_id', $product->category_id)
                                        ->where('id', '!=', $product->id)
                                        ->take(4)
                                        ->get();

        return view('Product.product', [
            'product' => $product,
            'cart' => $cart,
            'products' => $productsInSameCategory
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
        $products = $category->products;
        return view('Product.productsbyCategory', ['category' => $category, 'products' => $products, 'cart' => $cart]);
    }
}
