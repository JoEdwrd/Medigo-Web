<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Carbon\Carbon;
class PromotionController extends Controller
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
        $today = Carbon::today();
        $promotions = Promotion::where('startdate', '<=', $today)
                        ->where('enddate', '>=', $today)
                        ->get();
        return view('Promotions.promotions', [
            'promotions' => $promotions,
            'cart' => $cart
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Promotion $promotion)
    {
        $user = auth()->user();
        if($user){
            $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id ]);
        }else{
            $cart = null;
        }
        return view('Promotions.promoDetail',['promotion' => $promotion, 'cart' => $cart, 'user' => $user]);
    }
}
