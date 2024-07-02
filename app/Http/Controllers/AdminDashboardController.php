<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Product;
use App\Models\OrderDetail;


class AdminDashboardController extends Controller
{
    public function index()
    {
        $user=User::count();
        $product=Product::count();
        $transaction=Transaction::count();
        $transactions=Transaction::all();
        $totalEarnings = Transaction::join('order_details', 'transactions.id', '=', 'order_details.transaction_id')
                                ->join('products', 'order_details.product_id', '=', 'products.id')
                                ->leftJoin('promotions', 'transactions.promotion_id', '=', 'promotions.id')
                                ->where('transactions.status', 'completed')
                                ->selectRaw('transactions.id, 
                                             SUM(order_details.quantity * products.price) as transaction_total, 
                                             IFNULL(promotions.discount, 1) as discount')
                                ->groupBy('transactions.id', 'promotions.discount')
                                ->get()
                                ->sum(function($transaction) {
                                    return $transaction->transaction_total * (1-$transaction->discount);
                                });
        $monthlyEarnings = Transaction::join('order_details', 'transactions.id', '=', 'order_details.transaction_id')
                                  ->join('products', 'order_details.product_id', '=', 'products.id')
                                  ->leftJoin('promotions', 'transactions.promotion_id', '=', 'promotions.id')
                                  ->where('transactions.status', 'completed')
                                  ->selectRaw('DATE_FORMAT(transactions.created_at, "%Y-%m") as month, 
                                               SUM(order_details.quantity * products.price * (1-IFNULL(promotions.discount, 1))) as total_earnings')
                                  ->groupBy('month')
                                  ->orderBy('month', 'asc')
                                  ->get();
                                //   dd($monthlyEarnings); 
        
        return view('AdminPage.home',compact('user','product','transaction','totalEarnings','transactions','monthlyEarnings'));
    }
}
