<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if($user){
            $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id ]);
        }else{
            $cart = null;
        }
        return view('history.OrderDetail', compact('cart'));
    }
}
