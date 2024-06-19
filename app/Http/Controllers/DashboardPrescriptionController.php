<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescription;

class DashboardPrescriptionController extends Controller
{
    public function index(){
        $prescriptions = Prescription::all();
        return view('adminPage.prescriptions.index', compact('prescriptions'));
    }

    public function update(Request $request, string $slug)
    {
       Prescription::where('slug', $slug)->update(['status' => $request->status]);

        return redirect('/dashboard/prescription')->with('success', 'Prescription status has been updated!');
    }

}
