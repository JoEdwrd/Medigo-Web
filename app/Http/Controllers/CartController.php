<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        // $cart = Auth::user()->cart;

        // $cart = Cart::firstOrCreate(['user_id' => 1]);
        $cart = Cart::with(['cart_details.product', 'promotion'])->whereKey(1)->get();
        // $cartDetail = CartDetail::firstOrCreate(['cart_id' => $cart->id]);
        // $promo = Promotion::with(['cart'])->where('cart_id', '=', 1)->get();
        

        return view('cart', compact('cart'));
    }

    public function addPromo(Request $request){

        $data = $request->all();

        // dd($request->promotionName);

        $cart = Cart::where('user_id', 1)->firstOrFail();

        // dd($cart);

        $promo = Promotion::where(['code' => $request->promotionName]);

        // dd($promo->exists());    
        
        if($promo->exists()){
            // $cart->promotion()->associate($promo);
            $promo = $promo->get()->first();
            
            $cart->promotion_id = $promo->id;

            $cart->save();
        }

        return redirect()->back()->with('success', 'Promo added to cart');
    }

    public function addProduct(Request $request, $product_id){
        // Retrieve the authenticated user
        // $user = Auth::user();
    
        // Retrieve the user's cart, or create a new one if it doesn't exist
        // $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);

        $cart = Cart::firstOrCreate(['user_id' => 1]);
        
        // Check if the product is already in the cart
        $cartItem = $cart->cart_details()->where('product_id', $product_id)->first();
        if ($cartItem) {
            // If the product is already in the cart, increment the quantity
            $cartItem->quantity += 1;
        } else {
            // Otherwise, create a new CartItem for the product
            $cartItem = new CartDetail(['product_id' => $product_id, 'cart_id' => $cart->id, 'quantity' => 1]);
            $cart->cart_details()->save($cartItem);
        }
        // dd($cartItem);
        // Save the cart item
        $cartItem->save();

        // Redirect to the cart index page with a success message
        return redirect()->back()->with('success', 'Product added to cart');
    }

    public function removeFromCart(Request $request, $itemId)
    {
        // Find the cart item by its ID
        $cartItem = CartDetail::where('product_id', $itemId)->get()[0];

        // dd($cartItem); 

        if($cartItem->quantity > 1){
            $cartItem->quantity -= 1;
            $cartItem->save();
        }else{
            // Delete the cart item
            $cartItem->delete();
        }

        // Redirect to the cart index page with a success message
        return redirect()->back()->with('success', 'Product reduced');
    }
}
