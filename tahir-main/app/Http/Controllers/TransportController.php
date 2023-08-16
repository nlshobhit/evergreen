<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transport;
use App\Models\Inventory;
use Carbon\Carbon;

class TransportController extends Controller
{
    public function AllTransport(){
        $data = Transport::all();
        return view('transport.all_transport',compact('data'));
    }
    public function AddTransport(){
        $product = Inventory::get();
        return view('transport.add_transport',compact('product'));
    }

    public function StoreTransport(Request $request){
        $request->validate([
            'transport_type' => 'required|string',
            'transport_amount' => 'required|numeric',
            'transport_location' => 'required|string',
            'date' => 'required|date',
            'product_id' => 'required'
        ]);

        Transport::insert([
            'transport_type' => $request->transport_type,
            'transport_amount' => $request->transport_amount,
            'transport_location' => $request->transport_location,
            'date' => $request->date,
            'product_id' => $request->product_id,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('all.transport');
    }

    public function EditTransport($id){
        $id = Transport::findOrfail($id);
        $product = Sale::get();
        return view('transport.edit_transport',compact('id','product'));
    }

    public function UpdateTransport(Request $request){
        $trans_id = $request->id;
        Transport::findOrfail($trans_id)->update([
            'transport_type' => $request->transport_type,
            'transport_amount' => $request->transport_amount,
            'transport_location' => $request->transport_location,
            'date' => $request->date,
            'product_id' => $request->product_id,
            'updated_at' => Carbon::now()
        ]);
        return redirect()->route('all.transport');
    }

    public function DeleteTransport($id){
        $id = Transport::findOrfail($id)->delete();
        return redirect()->route('all.transport');
    }
}
