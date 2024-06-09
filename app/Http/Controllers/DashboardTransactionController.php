<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // dd($data);
        return view("AdminPage.transactions.index",[    
            'transactions' => Transaction::all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaction = OrderDetail::join('transactions', 'transactions.id', '=', 'order_details.transaction_id')
                                    ->join('products', 'products.id', '=', 'order_details.product_id')
                                    ->where('transactions.id', '=', $id)->get();

        return view("AdminPage.transactions.show", [
            "transaction" => $transaction
        ]);
    }
}
