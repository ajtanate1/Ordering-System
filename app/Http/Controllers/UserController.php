<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function registration(Request $request){

       $staff = User::create([
        'firstname' =>$request->firstname,
        'lastname' =>$request->lastname,
        'address' =>$request->address,
        'email'=>$request->email,
        'mobile'=>$request->mobile,
        'password' => Hash::make($request->password),
        'userName' =>$request->userName
       ]);

       $staff->assignRole('customer');
       return redirect()->back()->with('success','Registration Success');
    }

    public function edit_cus($id){
        $user = User::findOrfail($id);
        return view('updateuser',compact('user'));
    }
    public function update_cus($id){
        $user = User::findOrfail($id);
        $user->update(request()->all());
        return redirect()->back();
    }
}
