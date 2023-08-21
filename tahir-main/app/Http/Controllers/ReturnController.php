<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\Returnsale;
use App\Models\Sale;
use Carbon\Carbon;

class ReturnController extends Controller
{
    public function AllReturnProduct(){
        $data = Returnsale::get();
        return view('return.all_return',compact('data'));
    }

    public function AddReturnProduct(){
        $data = Inventory::get();
        return view('return.add_return',compact('data'));
    }

    public function StoreReturnProduct(Request $request){
        $request->validate([
            'product_name' => 'required',
            'return_amount' => 'required',
            'return_reason' => 'required',
            'return_date' =>'required'
        ]);
        Returnsale::insert([
            'product_name' => $request->product_name,
            'return_amount' => $request->return_amount,
            'return_reason' => $request->return_reason,
            'return_date' => $request->return_date,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('all.return.product');
    }

    public function EditReturnProduct($id){
        $id = Returnsale::findOrfail($id);
        $sale = Sale::get();
        return view('return.edit_return',compact('sale','id'));
    }

    public function UpdateReturnProduct(Request $request){
        $retun_id = $request->id;
        $data = Returnsale::findOrfail($retun_id)->update([
            'product_name' => $request->product_name,
            'return_amount' => $request->return_amount,
            'return_reason' => $request->return_reason,
            'return_date' => $request->return_date,
            'updated_at' => Carbon::now()
        ]);
        return redirect()->route('all.return.product');
    }

    public function DeleteReturnProduct($id){
        $id = Returnsale::findOrfail($id)->delete();
        return redirect()->route('all.return.product');
    }
}
