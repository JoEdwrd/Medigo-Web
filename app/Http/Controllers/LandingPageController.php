<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function index()
    {

        $promotions = Promotion::orderByDesc('id')->take(3)->get();
        $topProducts = Product::select('products.*', DB::raw('SUM(order_details.quantity) as total_sold'))
        ->join('order_details', 'products.id', '=', 'order_details.product_id')
        ->join('transactions', 'order_details.transaction_id', '=', 'transactions.id')
        ->where('transactions.status', '=','completed')
        ->groupBy('products.id')
        ->orderByDesc('total_sold')
        ->take(5)
        ->get();
        $leastSoldProducts = Product::select('products.*', DB::raw('COALESCE(SUM(order_details.quantity), 0) as total_sold'))
        ->leftJoin('order_details', function ($join) {
            $join->on('products.id', '=', 'order_details.product_id')
            ->leftJoin('transactions', 'order_details.transaction_id', '=', 'transactions.id')
            ->where('transactions.status', 'completed');
        })
            ->groupBy('products.id')
            ->orderBy('total_sold', 'asc')
            ->take(5)
            ->get();
        $categories=Category::all();
        // return $categories;
        return view('LandingPage.LandingIndex',[
            "products"=>Product::all(),
            "promotions"=>$promotions,
            "categories"=>$categories,
            "bestseller"=>$topProducts,
            "discounts"=>$leastSoldProducts
        ]);
    }
}
