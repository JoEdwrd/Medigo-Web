<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderDetail;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addTransaction(Request $request, $user_id)
    {
        $cart = Cart::with(['cart_details.product', 'promotion'])->where('user_id', $user_id)->get()->first();

        // dd($cart->cart_details);

        $check = 0;
        
        foreach ($cart->cart_details as $item) {
            
            if($item->product->patent == 1){
                $check = 1;
            }
        }
        // dd($check);
        if($check == 1){
            $trans = Transaction::create([
                'promotion_id' => $cart->promotion_id,
                'user_id' => $cart->user_id,
                'slug' => 'uwawKeren',
                'status' => 'Waiting for verification',
                // 'transaction_date' => Carbon::now()
            ]);
        }else{
            $trans = Transaction::create([
                'promotion_id' => $cart->promotion_id,
                'user_id' => $cart->user_id,
                'slug' => 'uwawKeren',
                // 'transaction_date' => Carbon::now()
            ]);
        }
        

        // dd($trans);


        foreach ($cart->cart_details as $val) {
            // dd($val->quantity);
            $item = new OrderDetail([
                'product_id' => $val->product->id,
                'quantity' => $val->quantity
            ]);

            $trans->order_details()->save($item);
        }

        $cart->delete();

        return redirect('/history');

    }
}
