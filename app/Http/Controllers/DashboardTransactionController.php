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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaction = OrderDetail::join('transactions', 'transactions.id', '=', 'order_details.transaction_id')
                                    ->join('products', 'products.id', '=', 'order_details.product_id')
                                    ->where('transactions.id', '=', $id)->get();
        return view('AdminPage.promotions.edit', [
            'transaction' => $transaction
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        // dd($request->all());
        // $rules = [
        //     'status' => 'max:100'
        // ];
        // $validatedData = $request->validate($rules);
        // dd($request);

        // dd($validatedData);

        // if ($request->file('image')) {
        //     if ($request->oldImage) {
        //         Storage::delete($request->oldImage);
        //     }
        //     $validatedData['image'] = $request->file('image')->store('tra$transaction-images');
        // }

        Transaction::where('slug', $slug)->update(['status' => $request->status]);

        return redirect('/dashboard/transactions')->with('success', 'Transaction has been updated!');
    }
}
