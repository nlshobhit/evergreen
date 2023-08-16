<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ItemController extends Controller
{
    public function AddItem(){
        $product = Vendor::get();
        return view('item.add_item',compact('product'));
    }

    public function StoreItem(Request $request){
        $request->validate([
            'vendor_company_name' => 'required',
            'item_name' => 'required',
            'total_piece' => 'required',
            'per_piece_value' => 'required',
            'total_amount' => 'required'
        ]);
        Item::insert([
            'vendor_company_name' => $request->vendor_company_name,
            'item_name' => $request->item_name,
            'total_piece' => $request->total_piece,
            'per_piece_value' => $request->per_piece_value,
            'total_amount' => $request->total_amount,
            'created_at' => Carbon::now()
        ]);

        return redirect()->back();
    }
}
