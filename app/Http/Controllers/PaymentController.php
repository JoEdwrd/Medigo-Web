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
        $this->middleware('auth');
    }

    public function getSnapToken(Request $request)
    {
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = false;
        Config::$isSanitized = true;
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
