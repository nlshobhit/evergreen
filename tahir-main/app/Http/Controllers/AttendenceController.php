<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendence;
use App\Models\Staff;
use App\Models\Store;
use Carbon\Carbon;

class AttendenceController extends Controller
{
    public function AllAttendence(){
        $data = Attendence::select('attendences.*', 'stores.store_name as store_name')->leftJoin('stores','attendences.store_id','stores.id')
        ->get();
        return view('attendence.all_attendence',compact('data'));
    }
    public function AddAttendence(){
        $data = Staff::get();
        $store = Store::get();
        return view('attendence.add_attendence',compact('data','store'));
    }

    public function StoreAttendence(Request $request){
          $request-> validate([
            'full_name' => 'required',
            'attendence' => 'required',
            'attendence_date' => 'required',
            'store_id' => 'required'
          ]);
          Attendence::insert([
            'full_name'=>$request ->full_name,
            'attendence'=>$request ->attendence,
            'attendence_date'=>$request ->attendence_date,
            'store_id'=>$request->store_id,
            'created_at' => Carbon::now()
          ]);

          return redirect()->route('all.attendence');
    }

    public function EditAttendence($id){
        $attendence_id = Attendence::findOrFail($id);
        $data = Staff::get();
        $store = Store::get();
        return view('attendence.edit_attendence',compact('attendence_id','data','store'));
    }

    public function UpdateAttendence(Request $request){
        $attendence_id = $request->id;

        Attendence::findOrFail($attendence_id)->update([
            'full_name'=>$request ->full_name,
            'attendence'=>$request ->attendence,
            'attendence_date'=>$request ->attendence_date,
            'store_id'=>$request->store_id,
            'updated_at'=> Carbon::now()
         ]);

         return redirect()->route('all.attendence');
    }

    public function DeleteAttendence($id){
        $attendence_id = Attendence::findOrFail($id)->delete();
        return redirect()->route('all.attendence');
    }

    public function fetchAndInsertData()
    {
        $table1Data = Attendence::select('full_name')->get();

        foreach ($table1Data as $data) {
            Staff::create(['full_name' => $data->full_name]);
        }

        return response()->json(['message' => 'Data fetched and inserted successfully']);
    }
}
