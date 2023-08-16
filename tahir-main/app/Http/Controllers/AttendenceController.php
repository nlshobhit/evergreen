<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendence;
use App\Models\Staff;
use Carbon\Carbon;

class AttendenceController extends Controller
{
    public function AllAttendence(){
        $data = Attendence::get();
        return view('attendence.all_attendence',compact('data'));
    }
    public function AddAttendence(){
        $data = Staff::get();
        return view('attendence.add_attendence',compact('data'));
    }

    public function StoreAttendence(Request $request){
          $request-> validate([
            'full_name' => 'required',
            'attendence' => 'required',
            'attendence_date' => 'required'
          ]);
          Attendence::insert([
            'full_name'=>$request ->full_name,
            'attendence'=>$request ->attendence,
            'attendence_date'=>$request ->attendence_date,
            'created_at' => Carbon::now()
          ]);

          return redirect()->route('all.attendence');
    }

    public function EditAttendence($id){
        $attendence_id = Attendence::findOrFail($id);
        return view('attendence.edit_attendence',compact('attendence_id'));
    }

    public function UpdateAttendence(Request $request){
        $attendence_id = $request->id;

        Attendence::findOrFail($attendence_id)->update([
            'full_name'=>$request ->full_name,
            'attendence'=>$request ->attendence,
            'attendence_date'=>$request ->attendence_date,
            'updated_at'=> Carbon::now()
         ]);

         return redirect()->route('all.attendence');
    }


    // public function DeleteStaff($id){
    //     $staff_id = Staff::findOrFail($id)->delete();
    //     return redirect()->route('all.staff');
    // }
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
