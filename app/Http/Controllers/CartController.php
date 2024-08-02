<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\CartDetail;
use Illuminate\Support\Str;
use App\Models\Prescription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if($user){
            $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id ]);
        }else{
            $cart = null;
        }

        return view('cart', compact('cart', 'user'));
    }

    public function changeQty(Request $request, $product_id){
        $user = auth()->user();

        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        $qty = $request->quantity;

        $cartItem = $cart->cart_details()->where('product_id', $product_id)->first();

        $product = $cartItem->product()->first();

        if($qty > $product->stock){
            return redirect()->back()->withErrors(['quantity_error_' . $product_id => 'Available stock is '.$product->stock.'. Please reduce the quantity']);
        }else if($qty > 0){
            $cartItem->quantity = $qty;
            $cartItem->save();
        }else{
            $cartItem->delete();
        }


        return redirect()->back()->with('success', 'Product quantity changed');

    }

    public function addPromo(Request $request){

        $user = auth()->user();

        $cart = Cart::where('user_id', $user->id)->firstOrFail();

        $promo = Promotion::where(['code' => $request->promotionName])->first();

        $currentTime = Carbon::now();

        if(isset($promo) && $currentTime->lte($promo->enddate) && $currentTime->gte($promo->startdate)){
            $cart->promotion_id = $promo->id;

            $cart->save();
        }else if(!isset($promo)) {
            return redirect()->back()->withErrors(['promo_error' => 'Invalid promo code!']);
        }else{
            return redirect()->back()->withErrors(['promo_error' => 'Promo is unavailable!']);
        }

        return redirect()->route('cart.index')->with('success', 'Promo successfully added to cart');
    }

    public function addProduct(Request $request, $product_id){

        $user = auth()->user();

        if(!$user){
            return redirect('/login');
        }

        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        $cartItem = $cart->cart_details()->where('product_id', $product_id)->first();
        if ($cartItem) {
            $cartItem->quantity += 1;
        } else {
            $cartItem = new CartDetail(['product_id' => $product_id, 'cart_id' => $cart->id, 'quantity' => 1]);
            $cart->cart_details()->save($cartItem);
        }

        $cartItem->save();

        return redirect()->back()->with('success', 'Product added to cart');
    }

    public function removePromo(Request $request){
        $user = auth()->user();

        $cart = Cart::where('user_id', $user->id)->firstOrFail();

        if(isset($cart->promotion_id)){
            $cart->promotion_id = null;
            $cart->save();
        }

        return redirect()->back()->with('success', 'Promo removed from cart');
    }

    public function removeAllItems(Request $request){
        $user = auth()->user();
        $cart = Cart::where('user_id', $user->id)->firstOrFail();

        $cart->cart_details()->delete();

        return redirect()->back()->with('success', 'Product reduced');

    }

    public function removeFromCart(Request $request, $itemId)
    {
        $cartItem = CartDetail::where('product_id', $itemId)->get()->first();

        $cartItem->delete();

        return redirect()->back()->with('success', 'Product reduced');
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $validatedData=$request->validate( [
            'image' => 'required|image|file|max:1024'
        ]);

        if($request->file("image")){
            $validatedData["image"]=$request->file("image")->store("pres-images");
        }
        $validatedData['slug'] = Str::slug($validatedData['image']) . '-' . Str::lower(Str::random(5));

        Prescription::create($validatedData);

        $cart = Cart::with(['cart_details.product', 'promotion'])->where('user_id', $user->id)->get()->first();

        return redirect('/addTransaction/'.$cart->user_id);
    }

}
