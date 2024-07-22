<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class LandingPageController extends Controller
{
    public function index()
    {
        
        $user = auth()->user();
        if($user){
            $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id ]);
        }else{
            $cart = null;
        }
        $today = Carbon::today(); // Mendapatkan tanggal hari ini
        $promotions = Promotion::where('startdate', '<=', $today)
                                ->where('enddate', '>=', $today)
                                ->orderByDesc('id') // Mengurutkan berdasarkan ID secara menurun
                                ->take(3) // Membatasi hasil hanya 3 promosi
                                ->get();
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
            "discounts"=>$leastSoldProducts,
            'cart'=>$cart
        ]);
    }
}
