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
    $user = User::count();
    $product = Product::count();
    $transaction = Transaction::count();

    // Ambil transaksi terbaru jika kurang dari 5
    if ($transaction < 5) {
        $transactions = Transaction::orderBy('created_at', 'desc')->get();
    } else {
        $transactions = Transaction::orderBy('created_at', 'desc')->take(5)->get();
    }

    $totalEarnings = Transaction::join('order_details', 'transactions.id', '=', 'order_details.transaction_id')
    ->join('products', 'order_details.product_id', '=', 'products.id')
    ->leftJoin('promotions', 'transactions.promotion_id', '=', 'promotions.id')
    ->where('transactions.status', 'completed')
    ->selectRaw('SUM(order_details.quantity * products.price * (1 - IFNULL(promotions.discount, 0))) as total_earnings')
    ->value('total_earnings');


    // Pendapatan bulanan
    $monthlyEarnings = Transaction::join('order_details', 'transactions.id', '=', 'order_details.transaction_id')
        ->join('products', 'order_details.product_id', '=', 'products.id')
        ->leftJoin('promotions', 'transactions.promotion_id', '=', 'promotions.id')
        ->where('transactions.status', 'completed')
        ->selectRaw('DATE_FORMAT(transactions.created_at, "%Y-%m") as month, 
                     SUM(order_details.quantity * products.price * (1 - IFNULL(promotions.discount, 0))) as total_earnings')
        ->groupBy('month')
        ->orderBy('month', 'asc')
        ->get();

    return view('AdminPage.home', compact('user', 'product', 'transaction', 'totalEarnings', 'transactions', 'monthlyEarnings'));
}



}
