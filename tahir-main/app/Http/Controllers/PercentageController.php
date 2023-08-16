<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Percentage;
use Carbon\Carbon;

class PercentageController extends Controller
{
    public function AddPercentage(){
        $product = Inventory::get();
        return view('percentage.add_percentage',compact('product'));
    }

    public function StorePercentage(Request $request){
        $request->validate([
            'name' => 'required',
            'percentage' => 'required',
            'product_id' => 'required'
        ]);
        Percentage::insert([
            'name' => $request->name,
            'percentage' => $request->percentage,
            'product_id' => $request->product_id,
            'created_at' => Carbon::now()
        ]);

        return redirect()->back();
    }
}
