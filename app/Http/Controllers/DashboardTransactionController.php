<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail; 
use App\Models\TrackingOrder;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $query = Transaction::query();
    
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->whereDate('created_at', 'like', "%{$search}%")
                  ->orWhere('status', 'like', "%{$search}%");
            });
            
        }

        // dd($query->toSql(), $query->getBindings());

        $transactions = $query->get();

        return view('AdminPage.transactions.index', [
            'transactions' => $transactions
        ]);

        // dd($data);
        // return view("AdminPage.transactions.index",[
        //     'transactions' => Transaction::all()
        // ]);
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

        // $validatedData = $request->validate([

        // ])

        $transaction = Transaction::where('slug', $slug)->first();
        $transaction->update([
            'status' => $request->status,
            'payment_method' => $request->paymentMethod
        ]);
        // dd($request->status);

        if($request->status == 'Canceled'){
            foreach($transaction->order_details as $item){
                $item->product->stock += $item->quantity;
                $item->product->save();
            }
        }

        $tracking = Transaction::where('slug', $slug)->first();

        if ($request->status == 'Waiting for verification') {
            TrackingOrder::where('transaction_id', $tracking->id)->update(['waiting_for_verification' => Carbon::now()]);
        };

        if ($request->status == 'Waiting for payment') {
            TrackingOrder::where('transaction_id', $tracking->id)->update(['waiting_for_payment' => Carbon::now()]);
        };

        if (
            $request->status == 'In progress'
        ) {
            TrackingOrder::where('transaction_id', $tracking->id)->update(['in_progress' => Carbon::now()]);
        };

        if ($request->status == 'Completed') {
            TrackingOrder::where('transaction_id', $tracking->id)->update(['completed' => Carbon::now()]);
        };

        if ($request->status == 'Canceled') {
            TrackingOrder::where('transaction_id', $tracking->id)->update(['canceled' => Carbon::now()]);
        };

        return redirect('/dashboard/transactions')->with('success', 'Transaction has been updated!');
    }
}
