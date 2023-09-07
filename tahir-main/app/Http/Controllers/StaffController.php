<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Store;
use Carbon\Carbon;

class StaffController extends Controller
{
    public function AllStaff(){
        $data = Staff::select('staff.*', 'stores.store_name as store_name')->leftJoin('stores','staff.store_id','stores.id')
        ->get();
        return view('staff.all_staff',compact('data'));
    }

    public function AddStaff(){
         $data = Store::get();
        return view('staff.add_staff',compact('data'));
    }

    public function StoreStaff(Request $request){
        $request->validate([
            'store_id' => 'required',
            'full_name' => 'required',
            'department' => 'required',
            'date_of_joining' => 'required',
            'mobile_number' => ['required','string','max:10'],
            'address' => 'required',
            'salary' => 'required',
            'shift_timing' => 'required',
            'add_incentive' => 'required'
        ]);
         Staff::insert([
            'full_name' => $request->full_name,
            'department' => $request->department,
            'date_of_joining' => $request->date_of_joining,
            'mobile_number' => $request->mobile_number,
            'address' => $request->address,
            'salary' => $request->salary,
            'shift_timing' => $request->shift_timing,
            'add_incentive' =>$request->add_incentive,
            'created_at' => Carbon::now(),
            'store_id' => $request->store_id
         ]);

         return redirect()->route('all.staff');
    }

    public function EditStaff($id){
        $staff_id = Staff::findOrFail($id);
        $data=Store::get();
        return view('staff.edit_staff',compact('staff_id','data'));
    }

    public function UpdateStaff(Request $request){
        $staff_id = $request->id;

        Staff::findOrFail($staff_id)->update([
            'store_id' => $request->store_id,
            'full_name' => $request->full_name,
            'department' => $request->department,
            'date_of_joining' => $request->date_of_joining,
            'mobile_number' => $request->mobile_number,
            'address' => $request->address,
            'salary' => $request->salary,
            'shift_timing' => $request->shift_timing,
            'add_incentive' =>$request->add_incentive,
            'updated_at'=> Carbon::now()
         ]);

         return redirect()->route('all.staff');
    }

    public function DeleteStaff($id){
        $staff_id = Staff::findOrFail($id)->delete();
        return redirect()->route('all.staff');
    }
}
