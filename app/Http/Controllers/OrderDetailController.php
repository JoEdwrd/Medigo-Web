<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderDetail;
use App\Models\Transaction;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index($order)
    {
        $user = auth()->user();
        if($user){
            $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id ]);
        }else{
            $cart = null;
        }
        $orderDetail = Transaction::find($order);
        // dd($orderDetail);
        return view('history.OrderDetail', compact('cart', 'orderDetail'));
    }

    public function cancel($id)
    {
        $orderDetail = Transaction::where('id', $id)->first();

        if ($orderDetail) {
            $orderDetail->status = 'Canceled';
            $orderDetail->save();

            return redirect()->back()->with('success', 'Order has been canceled.');
        }

        return redirect()->back()->with('error', 'Order not found.');
    }
}
