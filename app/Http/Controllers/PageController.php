<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function faq()
    {
        $user = auth()->user();
        if($user){
            $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id ]);
        }else{
            $cart = null;
        }
        return view('FooterLink.faq', compact('cart')); // Return the 'faq' view
    }

    public function termsandconditions()
    {
        $user = auth()->user();
        if($user){
            $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id ]);
        }else{
            $cart = null;
        }
        return view('FooterLink.tnc', compact('cart')); // Return the 'faq' view
    }
    public function aboutus()
    {
        $user = auth()->user();
        if($user){
            $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id ]);
        }else{
            $cart = null;
        }
        return view('FooterLink.aboutus', compact('cart')); // Return the 'faq' view
    }
}
