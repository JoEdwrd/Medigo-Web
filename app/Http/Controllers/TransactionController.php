<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderDetail;
use App\Models\Prescription;
use App\Models\Transaction;
use App\Models\User;
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
        $user = User::findOrFail($user_id);
        // dd($cart);
        // dd($cart->cart_details);
        if(!isset($user->address)){
            return redirect()->back()->withErrors(['order_error' => 'Please input your address!']);
        }
        $check = 0;

        foreach ($cart->cart_details as $item) {

            if($item->product->patent == 1){
                $check = 1;
            }

            $item->product->stock -= $item->quantity;
            $item->product->save();
        }

        

        if($check == 1){
            $trans = Transaction::create([
                'promotion_id' => $cart->promotion_id,
                'user_id' => $cart->user_id,
                'slug' => $cart->id,
                'status' => 'Waiting for verification'
            ]);

            Prescription::latest('created_at')->first()->update([
                'transaction_id' => $trans->id
            ]);
        }else{
            $trans = Transaction::create([
                'promotion_id' => $cart->promotion_id,
                'user_id' => $cart->user_id,
                'slug' => $cart->id,
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
