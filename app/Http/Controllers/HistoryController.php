<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\TrackingOrder;

class HistoryController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        if ($user) {
            $transactions = Transaction::with(['order_details.product'])
                ->where('user_id', $user->id)
                ->orderBy('created_at', 'desc')
                ->get()
                ->groupBy('status');
            $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id ]);
        } else {
            $transactions = collect();
            $cart = null;
        }

        $title = 'Transaction History';

        return view('history.index', [
            'inProgress' => $transactions->get('In progress', collect()),
            'waitForPayment' => $transactions->get('Waiting for payment', collect()),
            'waitForVerification' => $transactions->get('Waiting for verification', collect()),
            'completed' => $transactions->get('Completed', collect()),
            'canceled' => $transactions->get('Canceled', collect()),
            'cart' => $cart,
            'title' => $title
        ]);
    }

    public function completeTransaction($id)
    {
        $transaction = Transaction::find($id);

        if ($transaction && $transaction->status == 'In progress') {
            $transaction->status = 'Completed';
            $transaction->save();
            TrackingOrder::where('transaction_id', $id)->update(['Completed' => Carbon::now()]);

            return redirect()->back()->with('success', 'Transaction marked as completed.');
        }

        return redirect()->back()->with('error', 'Transaction not found.');
    }
}

