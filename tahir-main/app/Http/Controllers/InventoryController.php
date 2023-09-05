<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class InventoryController extends Controller
{
    public function AllInventory(){
        $id = Auth::user()->id;
        $data = User::find($id);
        $storeId= $data->store_id;
        $data = Inventory::select('inventories.*', 'stores.store_name as store_name')
        ->leftJoin('stores','inventories.store_id','stores.id')
        ->where('inventories.store_id', $storeId)
        ->get();
        return view('inventory.all_inventory',compact('data'));
    }

    public function AddInventory(){
        $data = Store::get();
        return view('inventory.add_inventory',compact('data'));
    }

    public function StoreInventory(Request $request){
        $request->validate([
            'product_name' => 'required',
            'product_type' => 'required',
            'manufacturer' => 'required',
            'vendor_name' => 'required',
            'no_of_pieces' => 'required',
            'product_dimension' => 'required',
            'store_id' => 'required',
            'per_piece_price' => 'required',
            'total_value' => 'required'
        ]);
         Inventory::insert([
            'product_name' => $request->product_name,
            'product_type' => $request->product_type,
            'manufacturer' => $request->manufacturer,
            'vendor_name' => $request->vendor_name,
            'no_of_pieces' => $request->no_of_pieces,
            'product_dimension' => $request->product_dimension,
            'store_id' => $request->store_id,
            'per_piece_price' => $request->per_piece_price,
            'total_value' => $request->total_value,
            'created_at' => Carbon::now()
         ]);

         return redirect()->route('all.inventory');
    }

    public function EditInventory($id){
        $inventory_id = Inventory::findOrFail($id);
        $data = Store::get();
        return view('inventory.edit_inventory',compact('inventory_id','data'));
    }

    public function UpdateInventory(Request $request){
        $inventory_id = $request->id;

        Inventory::findOrFail($inventory_id)->update([
            'product_name' => $request->product_name,
            'product_type' => $request->product_type,
            'manufacturer' => $request->manufacturer,
            'vendor_name' => $request->vendor_name,
            'no_of_pieces' => $request->no_of_pieces,
            'product_dimension' => $request->product_dimension,
            'store_id' => $request->store_id,
            'per_piece_price' => $request->per_piece_price,
            'total_value' => $request->total_value,
            'updated_at'=> Carbon::now()
         ]);

         return redirect()->route('all.inventory');
    }

    public function DeleteInventory($id){
        $inventory_id = Inventory::findOrFail($id)->delete();
        return redirect()->route('all.inventory');
    }
}
