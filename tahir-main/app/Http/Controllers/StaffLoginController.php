<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\StaffLogin;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class StaffLoginController extends Controller
{
    public function AddUser()
    {
       $data=Store::get();
       return view('stafflogin.add_stafflogin',compact('data'));
    }


    // public function StoreUser(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
    //         // 'store_name' => 'required',
    //         // 'role' => 'required'
    //     ]);
    //     User::insert([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => $request->password,
    //         // 'store_name' => $request->store_name,
    //         // 'role' => $request->role,
    //         'created_at' => Carbon::now()
    //     ]);

    //     return redirect()->back();

    // }
    public function StoreUser1(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'user_id' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed'],
            'store_name' => 'required',
            'role' => 'required'
        ]);
        StaffLogin::insert([
            'name' => $request->name,
            'user_id' => $request->user_id,
            'password' => Hash::make($request->password),
            'store_name' => $request->store_name,
            'role' => $request->role,
            'created_at' => Carbon::now()
        ]);

        return redirect()->back();

    }


}
