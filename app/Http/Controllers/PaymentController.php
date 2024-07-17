<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function __construct()
    {
        // Ensure the user is authenticated
        $this->middleware('auth');
    }

    public function getSnapToken(Request $request)
    {
        // Set your Merchant Server Key
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = false;
        // Set sanitization on (default)
        Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        Config::$is3ds = true;

        $user = Auth::user();

        $objData = $request->all();

        $params = array(
            'transaction_details' => array(
                'order_id' => $objData['transaction_id'],
                'gross_amount' => $objData['total'],
            ),
            'customer_details' => array(
                'first_name' => $user->name,
                'last_name' => '',
                'email' => $user->email,
                'phone' => $user->phone,
                'address' => $user->address,
            ),
            "billing_address" => array(
                'address' => $user->address,
                'first_name' => $user->name,
                'last_name' => '',
                'phone' => $user->phone,
                "city" => "",
                "postal_code" => "",
                "country_code" => ""
            ),
            'item_details' => array(),
        );

        foreach ($objData['products'] as $product) {
            $productDetail = array(
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => $product['quantity'],
                'subtotal' => $product['price'] * $product['quantity'],
            );
            array_push($params['item_details'], $productDetail);
        };

        $snapToken = Snap::getSnapToken($params);
        return response()->json(['snap_token' => $snapToken]);
    }
}

/* "customer_details": {
  "first_name": "TEST",
  "last_name": "UTOMO",
  "email": "test@midtrans.com",
  "phone": "+628123456",
  "billing_address": {
    "first_name": "TEST",
    "last_name": "UTOMO",
    "phone": "081 2233 44-55",
    "address": "Sudirman",
    "city": "Jakarta",
    "postal_code": "12190",
    "country_code": "IDN"
  },
  "shipping_address": {
    "first_name": "TEST",
    "last_name": "UTOMO",
    "phone": "0 8128-75 7-9338",
    "address": "Sudirman",
    "city": "Jakarta",
    "postal_code": "12190",
    "country_code": "IDN"
  }
} */
