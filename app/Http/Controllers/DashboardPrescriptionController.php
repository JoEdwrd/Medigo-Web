<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescription;
use App\Models\TrackingOrder;
use App\Models\Transaction;
use Carbon\Carbon;

class DashboardPrescriptionController extends Controller
{
    public function index()
    {
        $prescriptions = Prescription::all();
        return view('AdminPage.prescriptions.index', compact('prescriptions'));
    }

    public function show($slug)
    {
        $prescriptions = Prescription::where('slug', $slug)->firstOrFail();
        return view('AdminPage.prescriptions.show', [
            'prescriptions' => $prescriptions,
        ]);
    }

    public function edit($slug)
    {
        $prescriptions = Prescription::where('slug', $slug)->firstOrFail();
        return view('AdminPage.prescriptions.edit', [
            'prescriptions' => $prescriptions,
        ]);
    }

    public function update(Request $request, $id)
    {
        $prescriptions = Prescription::all();
        $request->validate([
            'status' => 'required|in:Waiting for Verification,Approved,Rejected',
        ]);

        $prescription = Prescription::findOrFail($id);
        $prescription->status = $request->status;

        if ($request->status == 'Approved') {
            $transaction = Transaction::findOrFail($prescription->transaction_id);
            $transaction->status = 'Waiting for payment';
            $transaction->save();

            TrackingOrder::where('transaction_id', $prescription->transaction_id)->update(['waiting_for_payment' => Carbon::now()]);
        }else if($request->status == 'Rejected') {
            $transaction = Transaction::findOrFail($prescription->transaction_id);
            $transaction->status = 'Canceled';
            $transaction->save();

            TrackingOrder::where('transaction_id', $prescription->transaction_id)->update(['canceled' => Carbon::now()]);

        }
        $prescription->save();

        return redirect()->route('admin.prescriptions.updateIndex')->with('success', 'Status updated successfully.');
    }
}
