<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registration(Request $request){
       $staff = User::create([
        'firstname' =>$request->firstname,
        'lastname' =>$request->lastname,
        'address' =>$request->address,
        'email'=>$request->email,
        'password' => Hash::make($request->password),
        'userName' =>$request->userName
       ]);

       $staff->assignRole('customer');
       return redirect()->back()->with('success','Added Customer');
    }
}
