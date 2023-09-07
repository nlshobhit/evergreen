<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transport;
use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TransportController extends Controller
{
    public function AllTransport(){
         $userData = Auth::user();
        $storeId = $userData->store_id;
        if($userData->role == 'admin'){
        $data = Transport::select('transports.*', 'stores.store_name as store_name')
        ->leftJoin('stores','transports.store_id','stores.id')
        ->get();
        }else{
           $data=  Transport::select('transports.*', 'stores.store_name as store_name')
            ->leftJoin('stores','transports.store_id','stores.id')
            ->where('transports.store_id', $storeId)
            ->get();
        }
        return view('transport.all_transport',compact('data'));
    }


    public function AddTransport(){
        $data = Store::get();
        return view('transport.add_transport',compact('data'));
    }

    public function StoreTransport(Request $request){
        $request->validate([
            'transport_type' => 'required|string',
            'transport_amount' => 'required|numeric',
            'transport_location' => 'required|string',
            'date' => 'required|date',
            'product_name' => 'required',
            'store_id' => 'required'
        ]);

        Transport::insert([
            'transport_type' => $request->transport_type,
            'transport_amount' => $request->transport_amount,
            'transport_location' => $request->transport_location,
            'date' => $request->date,
            'product_name' => $request->product_name,
            'store_id' => $request->store_id,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('all.transport');
    }

    public function EditTransport($id){
        $transportData = Transport::select('transports.*','stores.store_name as store_name')
         ->leftJoin('stores','transports.store_id','stores.id')
         ->where('transports.id', $id)
         ->first();
        $data = Store::get();
        return view('transport.edit_transport',compact('transportData','data'));
    }

    public function UpdateTransport(Request $request){
        $trans_id = $request->id;
        Transport::findOrfail($trans_id)->update([
            'transport_type' => $request->transport_type,
            'transport_amount' => $request->transport_amount,
            'transport_location' => $request->transport_location,
            'date' => $request->date,
            'product_name' => $request->product_name,
            'store_id' => $request->store_id,
            'updated_at' => Carbon::now()
        ]);
        return redirect()->route('all.transport');
    }

    public function DeleteTransport($id){
        $id = Transport::findOrfail($id)->delete();
        return redirect()->route('all.transport');
    }
}
