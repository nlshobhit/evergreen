<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Carbon\Carbon;

class VendorController extends Controller
{
    public function AllVendor()
    {
        $data = Vendor::get();
        return view('vendor.all_vendor',compact('data'));
    }

    public function AddVendor()
    {
        return view('vendor.add_vendor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function StoreVendor(Request $request)
    {
        $request->validate([
            'vendor_company_name' => 'required',
            'vendor_representative_name' => 'required',
            'vendor_product' => 'required',
            'vendor_from' => 'required',
            'date' => 'required',
            'vendor_address' => 'required',
            'vendor_billing_details' => 'required',
            'others' => 'required'
        ]);
         Vendor::insert([
            'vendor_company_name' => $request->vendor_company_name,
            'vendor_representative_name' => $request->vendor_representative_name,
            'vendor_product' => $request->vendor_product,
            'vendor_from' => $request->vendor_from,
            'date' => $request->date,
            'vendor_address' => $request->vendor_address,
            'vendor_billing_details' => $request->vendor_billing_details,
            'others' => $request->others,
            'created_at' => Carbon::now()
         ]);

         return redirect()->route('all.vendor');
    }

    public function EditVendor(string $id)
    {
        $vendor_id = Vendor::findOrFail($id);
        return view('vendor.edit_vendor',compact('vendor_id'));
    }

    public function UpdateVendor(Request $request)
    {
        $vendor_id = $request->id;

        Vendor::findOrFail($vendor_id)->update([
            'vendor_company_name' => $request->vendor_company_name,
            'vendor_representative_name' => $request->vendor_representative_name,
            'vendor_product' => $request->vendor_product,
            'vendor_from' => $request->vendor_from,
            'date' => $request->date,
            'vendor_address' => $request->vendor_address,
            'vendor_billing_details' => $request->vendor_billing_details,
            'others' => $request->others,
            'created_at' => Carbon::now()
         ]);

         return redirect()->route('all.vendor');

    }

    public function DeleteVendor(string $id)
    {
        $vendor_id = Vendor::findOrFail($id)->delete();
        return redirect()->route('all.vendor');
    }
}
