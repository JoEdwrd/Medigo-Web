<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderDetail;
use App\Models\TrackingOrder;
use App\Models\Transaction;
use Carbon\Carbon;
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
        $transaction = Transaction::find($order);
        return view('history.OrderDetail', compact('cart', 'transaction'));
    }

    public function cancel($transaction_id)
    {
        $transaction = Transaction::where('id', $transaction_id)->first();

        if ($transaction) {
            $transaction->status = 'Canceled';
            $transaction->save();

            TrackingOrder::where('transaction_id', $transaction_id)->update(['Canceled' => Carbon::now()]);

            return redirect()->back()->with('success', 'Order has been canceled.');
        }

        return redirect()->back()->with('error', 'Order not found.');
    }

    public function complete($transaction_id)
{
    $transaction = Transaction::where('id', $transaction_id)->first();

    if ($transaction) {
        $transaction->status = 'Completed';  // Ubah status menjadi 'Completed' atau status yang sesuai
        $transaction->save();

        TrackingOrder::where('transaction_id', $transaction_id)->update(['Completed' => Carbon::now()]);

        return redirect()->back()->with('success', 'Order has been completed.');
    }

    return redirect()->back()->with('error', 'Order not found.');
}


}
