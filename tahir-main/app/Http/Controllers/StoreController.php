<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StoreController extends Controller
{
    public function AddStore(){
        return view('store.add_store');
    }

    public function AllStore(){
          $data=Store::get();
          return view('store.all_store',compact('data'));
    }

    public function Store(Request $request){
        $request->validate([
            'store_name' => 'required',
            'address' => 'required',
            'mobile_number' => 'required',
            'manager_name' => 'required',
        ]);
         Store::insert([
            'store_name' => $request->store_name,
            'address' => $request->address,
            'mobile_number' => $request->mobile_number,
            'manager_name' => $request->manager_name,
            'created_at' => Carbon::now()
         ]);

         return redirect()->route('all.store');
    }

    public function EditStore($id){
        $store_id = Store::findOrFail($id);
        return view('store.edit_store',compact('store_id'));
    }

    public function UpdateStore(Request $request){
        $store_id = $request->id;

        Store::findOrFail($store_id)->update([
            'store_name' => $request->store_name,
            'address' => $request->address,
            'mobile_number' => $request->mobile_number,
            'manager_name' => $request->manager_name,
            'updated_at'=> Carbon::now()
         ]);

         return redirect()->route('all.store');
    }

    public function DeleteStore($id){
        $store_id = Store::findOrFail($id)->delete();
        return redirect()->route('all.store');
    }
}
