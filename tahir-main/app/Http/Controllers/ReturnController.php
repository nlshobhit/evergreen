<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\Returnsale;
use App\Models\Sale;
use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ReturnController extends Controller
{
    public function AllReturnProduct(){
        $userData = Auth::user();
        $storeId = $userData->store_id;
        if($userData->role == 'admin'){
         $data = Returnsale::select('returnsales.*', 'stores.store_name as store_name')
         ->leftJoin('stores','returnsales.store_id','stores.id')
        ->get();
        }else{
        $data = Returnsale::select('returnsales.*', 'stores.store_name as store_name')
        ->leftJoin('stores','returnsales.store_id','stores.id')
        ->where('returnsales.store_id',$storeId)
        ->get();
        }
        return view('return.all_return',compact('data'));
    }

    public function AddReturnProduct(){
        $data = Inventory::get();
        $store = Store::get();
        return view('return.add_return',compact('data','store'));
    }

    public function StoreReturnProduct(Request $request){
        $request->validate([
            'product_name' => 'required',
            'return_amount' => 'required',
            'return_reason' => 'required',
            'return_date' =>'required',
            'store_id' => 'required'
        ]);
        Returnsale::insert([
            'product_name' => $request->product_name,
            'return_amount' => $request->return_amount,
            'return_reason' => $request->return_reason,
            'return_date' => $request->return_date,
            'store_id' => $request->store_id,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('all.return.product');
    }

    public function EditReturnProduct($id){
        $returnData = Returnsale::select('returnsales.*','stores.store_name as store_name')
         ->leftJoin('stores','returnsales.store_id','stores.id')
         ->where('returnsales.id', $id)
         ->first();
        $data = Inventory::get();
        $store = Store::get();
        return view('return.edit_return',compact('data','returnData','store'));
    }

    public function UpdateReturnProduct(Request $request){
        $retun_id = $request->id;
        $data = Returnsale::findOrfail($retun_id)->update([
            'product_name' => $request->product_name,
            'return_amount' => $request->return_amount,
            'return_reason' => $request->return_reason,
            'return_date' => $request->return_date,
            'store_id' => $request->store_id,
            'updated_at' => Carbon::now()
        ]);
        return redirect()->route('all.return.product');
    }

    public function DeleteReturnProduct($id){
        $id = Returnsale::findOrfail($id)->delete();
        return redirect()->route('all.return.product');
    }
}
