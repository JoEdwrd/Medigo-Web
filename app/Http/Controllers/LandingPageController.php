<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('LandingPage.LandingIndex',[
            "products"=>Product::all()
        ]);
    }
}
