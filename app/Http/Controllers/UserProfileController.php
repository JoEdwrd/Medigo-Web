<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
    {
        $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> 1]);
        return view('Profile.user-profile', compact('cart'));
    }
}
