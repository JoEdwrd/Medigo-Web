<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\CartDetail;
use Illuminate\Support\Str;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // $cart = Cart::firstOrCreate(['user_id' => 1]);
        if($user){
            $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id ]);
        }else{
            $cart = null;
        }



        // $cart = Cart::firstOrCreate(['user_id' => 1])->with();

        // $cartDetail = CartDetail::firstOrCreate(['cart_id' => $cart->id]);
        // $promo = Promotion::with(['cart'])->where('cart_id', '=', 1)->get();
        // $cart = Cart::firstOrCreate(['user_id' => 1]);
        // dd($cart[0]->cart_details);

        return view('cart', compact('cart', 'user'));
    }

    public function changeQty(Request $request, $product_id){
        $user = auth()->user();
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        $qty = $request->quantity;

        // dd($qty);

        $cartItem = $cart->cart_details()->where('product_id', $product_id)->first();

        if($qty > 0){
            $cartItem->quantity = $qty;
            $cartItem->save();
        }else {
            $cartItem->delete();
        }


        return redirect()->back()->with('success', 'Product quantity changed');

    }

    public function addPromo(Request $request){
        $user = auth()->user();
        $data = $request->all();

        // dd($request->promotionName);

        $cart = Cart::where('user_id', $user->id)->firstOrFail();

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

        $user = auth()->user();

        if(!$user){
            return redirect('/login');
        }
        // Retrieve the user's cart, or create a new one if it doesn't exist
        // $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);

        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

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

    public function removeAllItems(Request $request){
        $user = auth()->user();
        $cart = Cart::where('user_id', $user->id)->firstOrFail();

        $cart->cart_details()->delete();

        return redirect()->back()->with('success', 'Product reduced');

    }

    public function removeFromCart(Request $request, $itemId)
    {
        // Find the cart item by its ID
        $cartItem = CartDetail::where('product_id', $itemId)->get()->first();

        // dd($cartItem);

        // if($cartItem->quantity > 1){
        //     $cartItem->quantity -= 1;
        //     $cartItem->save();
        // }else{
            // Delete the cart item
        $cartItem->delete();


        // Redirect to the cart index page with a success message
        return redirect()->back()->with('success', 'Product reduced');
    }

    public function store(Request $request)
    {
        // ddd($request);
        // dd($request->all());
        // if($request->hasFile($request)){
        //     dd("mantap");
        // }
        $user = auth()->user();
        $validatedData=$request->validate( [
            'image' => 'required|image|file|max:1024' // Adjust validation rules as needed
        ]);

        // $requestData = $request->all();
        // dd($requestData);
        // Check for uploaded file and validation
        // if (!$request->hasFile('image') || !$request->file('prescription_image')->isValid()) {
        //     // Handle validation failure (e.g., redirect with error message)
        //     return back()->withErrors(['prescription_image' => 'Invalid or missing prescription file']);
        // }
        // $file = $request->file('prescription_image');
        // $fileName = $request->file('prescription_image')->getClientOriginalName();

        // $path = $request->file('prescription_image')->storeAs('images', $fileName, 'public');
        // $requestData["prescription_image"] = '/storage/'.$path;


        if($request->file("image")){
            $validatedData["image"]=$request->file("image")->store("prescription-images");
        }
        $validatedData['slug'] = Str::slug($validatedData['image']) . '-' . Str::lower(Str::random(5));
        // dd($requestData);
        // Ensure image field is fillable
        Prescription::create($validatedData);

        // return redirect()->route("history-index")->with('flash_message', 'Prescription successfully uploaded!');
        $cart = Cart::with(['cart_details.product', 'promotion'])->where('user_id', $user->id)->get()->first();

        return redirect('/addTransaction/'.$cart->user_id);
    }

}
