<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
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

        $objData = $request->all();

        $params = array(
            'transaction_details' => array(
                'order_id' => $objData['transaction_id'],
                'gross_amount' => $objData['total'],
            ),
            'customer_details' => array(
                'first_name' => 'budi',
                'last_name' => 'pratama',
                'email' => 'budi.pra@example.com',
                'phone' => '08111222333'
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

    // public function getSnapToken(Request $request)
    // {
    //     // Log the request data
    //     Log::info('Request data: ', $request->all());

    //     // Set your Merchant Server Key
    //     Config::$serverKey = env('MIDTRANS_SERVER_KEY');
    //     // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    //     Config::$isProduction = false;
    //     // Set sanitization on (default)
    //     Config::$isSanitized = true;
    //     // Set 3DS transaction for credit card to true
    //     Config::$is3ds = true;

    //     $objData = $request->all();

    //     $params = array(
    //         'transaction_details' => array(
    //             'order_id' => $objData['transaction_id'],
    //             'gross_amount' => $objData['total'],
    //         ),
    //         'customer_details' => array(
    //             'first_name' => 'budi',
    //             'last_name' => 'pratama',
    //             'email' => 'budi.pra@example.com',
    //             'phone' => '08111222333'
    //         ),
    //         'item_details' => array(),
    //     );

    //     foreach ($objData['products'] as $product) {
    //         $productDetail = array(
    //             'id' => $product['id'],
    //             'name' => $product['name'],
    //             'price' => $product['price'],
    //             'quantity' => $product['quantity'],
    //         );
    //         array_push($params['item_details'], $productDetail);
    //     }

    //     Log::info('Params for Snap token: ', $params);

    //     try {
    //         $snapToken = Snap::getSnapToken($params);
    //         Log::info('Snap token generated: ', ['snap_token' => $snapToken]);
    //         return response()->json(['snap_token' => $snapToken]);
    //     } catch (\Exception $e) {
    //         Log::error('Error getting Snap token: ', ['error' => $e->getMessage()]);
    //         return response()->json(['error' => 'Failed to get Snap token'], 500);
    //     }
    // }

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
