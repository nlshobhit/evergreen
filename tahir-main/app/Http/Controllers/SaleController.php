<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Staff;
use Carbon\Carbon;
use Throwable;

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

    // public function StoreSale(Request $request){
    //   try{
    //     $request->validate([
    //     'customer_name' => 'required',
    //     'customer_number' => 'required',
    //     'customer_location' => 'required',
    //     'product_name' => 'required',
    //     'no_of_pieces' => 'required',
    //     'cost' => 'required',
    //     'cost_price' => 'required',
    //     'sold_price' => 'required',
    //     'profit_loss' => 'required',
    //     'advance_payment' => 'required',
    //     'pending_payment' => 'required',
    //     'full_name' => 'required',
    //     'add_incentive' => 'required',
    //     'percentage' => 'required',
    //     ]);

    //     $productNames = $request->product_name;
    //     $noOfPieces = $request->no_of_pieces;
    //     $costs = $request->cost;
    //     $fullNames = $request->full_name;
    //     $addIncentives = $request->add_incentive;
    //     $percentages = $request->percentage;

    //     $products = [];
    //     foreach ($productNames as $key => $productName) {
    //         $products[] = [
    //             'product_name' => $productName,
    //             'no_of_pieces' => $noOfPieces[$key],
    //             'cost' => $costs[$key],
    //             'full_name' => $fullNames[$key],
    //             'add_incentive' => $addIncentives[$key],
    //             'percentage' => $percentages[$key],
    //         ];
    //     }

    //     Sale::insert([
    //         'customer_name' => $request->customer_name,
    //         'customer_number' => $request->customer_number,
    //         'customer_location' => $request->customer_location,
    //         'product_name' => $productNames,
    //         'no_of_pieces' => $noOfPieces,
    //         'cost' => $costs,
    //         'cost_price' => $request->cost_price,
    //         'sold_price' => $request->sold_price,
    //         'profit_loss' => $request->profit_loss,
    //         'advance_payment' => $request->advance_payment,
    //         'pending_payment' => $request->pending_payment,
    //         'full_name' => $fullNames,
    //         'add_incentive' => $addIncentives,
    //         'percentage' => $percentages,
    //         'created_at' => Carbon::now(),
    //     ]);
    //     }   catch (Throwable $th){

    //     }

    //      return redirect()->route('all.sale');
    //     }

    public function StoreSale1(Request $request){
// print_r($request->product_name);die;
$a = $request->product_name;
$b = $request->no_of_pieces;
$c = $request->cost;
$d = $request->full_name;
$e = $request->add_incentive;
$f = $request->percentage;

foreach ($a as $product_name){
    // print_r($product_name);exit;
    $product[]=['product_name'=>$product_name];
    print_r($product);exit;
}
foreach ($b as $key => $no_of_pieces){
    $pieces[]=['no_of_pieces'=>$no_of_pieces];
}
foreach($c as $key => $cost){
    $price[]=['cost'=>$cost];
}
foreach($d as $key => $full_name){
    $name[]=['full_name'=>$full_name];
}
foreach($e as $key => $add_incentive){
    $add[]=['add_incentive'=>$add_incentive];
}
foreach($f as $key => $percentage){
    $per[]=['percentage'=>$percentage];
}
Sale::insert([
    'customer_name' => $request->customer_name,
    'customer_number' => $request->customer_number,
    'customer_location' => $request->customer_location,
    'product_name' => $product[$key],
    'no_of_pieces' => $pieces[$key],
    'cost' => $price[$key],
    'cost_price' => $request->cost_price,
    'sold_price' => $request->sold_price,
    'profit_loss' => $request->profit_loss,
    'advance_payment' => $request->advance_payment,
    'pending_payment' => $request->pending_payment,
    'full_name' => $name[$key],
    'add_incentive' => $add[$key],
    'percentage' => $per[$key],
    'created_at' => Carbon::now()
 ]);
    }
    public function StoreSale(Request  $request){
        try{
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

            $a = $request->product_name;
            $b = $request->no_of_pieces;
            $c = $request->cost;
            $d = $request->full_name;
            $e = $request->add_incentive;
            $f = $request->percentage;

            foreach ($a as $key => $product_name){
                $product[]=['product_name'=>$product_name];
            }
            foreach ($b as $key => $no_of_pieces){
                $pieces[]=['no_of_pieces'=>$no_of_pieces];
            }
            foreach($c as $key => $cost){
                $price[]=['cost'=>$cost];
            }
            foreach($d as $key => $full_name){
                $name[]=['full_name'=>$full_name];
            }
            foreach($e as $key => $add_incentive){
                $add[]=['add_incentive'=>$add_incentive];
            }
            foreach($f as $key => $percentage){
                $per[]=['percentage'=>$percentage];
            }
            Sale::insert([
                'customer_name' => $request->customer_name,
                'customer_number' => $request->customer_number,
                'customer_location' => $request->customer_location,
                'product_name' => $product[$key],
                'no_of_pieces' => $pieces[$key],
                'cost' => $price[$key],
                'cost_price' => $request->cost_price,
                'sold_price' => $request->sold_price,
                'profit_loss' => $request->profit_loss,
                'advance_payment' => $request->advance_payment,
                'pending_payment' => $request->pending_payment,
                'full_name' => $name[$key],
                'add_incentive' => $add[$key],
                'percentage' => $per[$key],
                'created_at' => Carbon::now()
             ]);
            } catch(Throwable $th){

            }

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
