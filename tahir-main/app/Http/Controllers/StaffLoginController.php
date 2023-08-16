<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\StaffLogin;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StaffLoginController extends Controller
{
    public function AddUser()
    {
       $user=StaffLogin::get();
       return view('stafflogin.add_stafflogin',compact('user'));
    }


    public function StoreUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'password' => 'required'
        ]);
        StaffLogin::insert([
            'user_id' => $request->user_id,
            'password' => $request->password,
            'created_at' => Carbon::now()
        ]);

        return redirect()->back();

    }

}
