<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class WebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        // Validate the incoming webhook request (optional)
        // Implement validation logic if needed

        // Process the webhook notification
        $notification = json_decode($request->getContent());

        // Extract necessary data from the notification
        $orderId = $notification->order_id;
        $transactionStatus = $notification->transaction_status;

        // Check if the transaction status is settlement
        if ($transactionStatus === 'settlement') {
            // Find the corresponding transaction in your database
            $transaction = Transaction::where('transaction_id', $orderId)->first();

            // If the transaction is found, update its status to "In progress"
            if ($transaction) {
                $transaction->status = 'In progress';
                $transaction->save();
            }
        }

        // Respond to the webhook request (HTTP status code 200 OK)
        return response()->json(['message' => 'Webhook received and processed'], 200);
    }
}
