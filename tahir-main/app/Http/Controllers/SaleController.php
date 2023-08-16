<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Staff;
use Carbon\Carbon;

class SaleController extends Controller
{

    public function AddSale(){
        $staff = Staff::get(); // Fetch data from the Staff model
        return view('sale.add_sale', compact('staff'));
    }


    public function AllSale(){
        $data = Sale::get();
        return view('sale.all_sale',compact('data'));
    }


    public function StoreSale(Request  $request){
            $request->validate([
                'customer_name' => 'required',
                'customer_number' => 'required',
                'customer_location' => 'required',
                'product_name' => 'required',
                'no_of_pieces' => 'required',
                'cost' => 'required',
                'cost_price' => 'required',
                'sold_price' => 'required',
                'profit_loss' => 'required',
                'advance_payment' => 'required',
                'pending_payment' => 'required',
                'full_name' => 'required',
                'add_incentive' => 'required',
                'percentage' => 'required'
            ]);

            Sale::insert([
                'customer_name' => $request->customer_name,
                'customer_number' => $request->customer_number,
                'customer_location' => $request->customer_location,
                'product_name' => $request->product_name,
                'no_of_pieces' => $request->no_of_pieces,
                'cost' => $request->cost,
                'cost_price' => $request->cost_price,
                'sold_price' => $request->sold_price,
                'profit_loss' => $request->profit_loss,
                'advance_payment' => $request->advance_payment,
                'pending_payment' => $request->pending_payment,
                'full_name' => $request->full_name,
                'add_incentive' => $request->add_incentive,
                'percentage' => $request->percentage,
                'created_at' => Carbon::now()
             ]);

         return redirect()->route('all.sale');
        }

    public function EditSale($id){
        $sale_id = Sale::findOrFail($id);
        return view('sale.edit_sale',compact('sale_id'));
    }

    public function UpdateSale(Request $request){
        $sale_id = $request->id;

        Sale::findOrFail($sale_id)->update([
            'customer_name' => $request->customer_name,
            'customer_number' => $request->customer_number,
            'customer_location' => $request->customer_location,
            'product_name' => $request->product_name,
            'no_of_pieces' => $request->no_of_pieces,
            'cost' => $request->cost,
            'cost_price' => $request->cost_price,
            'sold_price' => $request->sold_price,
            'profit_loss' => $request->profit_loss,
            'advance_payment' => $request->advance_payment,
            'pending_payment' => $request->pending_payment,
            'full_name' => $request->full_name,
            'add_incentive' => $request->add_incentive,
            'percentage' => $request->percentage,
            'updated_at'=> Carbon::now()
         ]);

         return redirect()->route('all.sale');
    }

    public function DeleteSale($id){
        $sale_id = Sale::findOrFail($id)->delete();
        return redirect()->route('all.sale');
    }


}
