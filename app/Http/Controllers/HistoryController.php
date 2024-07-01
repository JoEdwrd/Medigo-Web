<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['order_details.product'])
            ->orderBy('created_at', 'desc')
            ->get()
            ->groupBy('status');

        return view('history.index-history', [
            'inProgress' => $transactions->get('In progress', collect()),
            'waitForPayment' => $transactions->get('Waiting for payment', collect()),
            'waitForVerification' => $transactions->get('Waiting for verification', collect()),
            'completed' => $transactions->get('Completed', collect()),
            'canceled' => $transactions->get('Canceled', collect()),
        ]);
    }
}

