<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Value;
use App\Models\Value as ModelsValue;
use Carbon\Carbon;
use App\Models\Vendor;

class ValueController extends Controller
{
    public function AddValue(){
        $name=Vendor::get();
        return view('value.add_value',compact('name'));
    }

    public function StoreValue(Request $request){
        $request->validate([
            'vendor_company_name' => 'required',
            'total_due' => 'required',
            'total_advance_paid' => 'required',
            'total_due_from_vendor' => 'required',
            'adjustment' => 'required'
        ]);
        ModelsValue::insert([
            'vendor_company_name' => $request->vendor_company_name,
            'total_due' => $request->total_due,
            'total_advance_paid' => $request->total_advance_paid,
            'total_due_from_vendor' => $request->total_due_from_vendor,
            'adjustment' => $request->adjustment,
            'created_at' => Carbon::now()
        ]);

        return redirect()->back();
    }
}

