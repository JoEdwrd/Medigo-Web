<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Transaction;

class MidtransWebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $payload = $request->getContent();
        $notification = json_decode($payload);

        Log::info('Midtrans Webhook received: ', (array) $notification);

        if (isset($notification->transaction_status) && isset($notification->order_id)) {
            $transactionStatus = $notification->transaction_status;
            $orderId = $notification->order_id;

            $transaction = Transaction::find($orderId);

            if ($transaction) {
                switch ($transactionStatus) {
                    case 'capture':
                    case 'settlement':
                        $transaction->status = 'In progress';
                        break;
                    case 'pending':
                        $transaction->status = 'In progress';
                        break;
                    case 'deny':
                    case 'cancel':
                    case 'expire':
                        $transaction->status = 'Canceled';
                        break;
                    default:
                        $transaction->status = 'Unknown';
                        break;
                }

                $transaction->save();

                return response()->json(['message' => 'Transaction status updated successfully'], 200);
            } else {
                return response()->json(['error' => 'Transaction not found'], 404);
            }
        } else {
            return response()->json(['error' => 'Invalid payload'], 400);
        }
    }
}
