<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index()
    {
        return view('history.OrderDetail');
    }
}
