<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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

        // Debugging logs
        Log::info('Received request data:', $objData);

        $params = array(
            'transaction_details' => array(
                'order_id' => $objData['transaction_id'],
                'gross_amount' => intval($objData['total']), // Ensure it's an integer
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
            'item_details' => $objData['item_details'], // Use the item details from objData
        );

        // Debugging logs
        // Log::info('Parameters sent to Midtrans:', $params);

        $snapToken = Snap::getSnapToken($params);
        return response()->json(['snap_token' => $snapToken]);
    }
}
