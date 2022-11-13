<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view()
    {
        return view('adminregistration');
    }

    public function registration(Request $request)
    {
        $request-> validate(
            [
                'name' =>'required',
                'email' => "required|email",
                'password' => 'required|min:6',
                'phone' => 'required|numeric',
                'address' => 'required',
                'nid' => 'required'
            ]
        );

        $admins = new Admin();
        $admins ->name = $request->input('name');
        $admins ->email = $request->input('email');
        $admins ->password = $request->input('password');
        $admins ->phone = $request->input('phone');
        $admins ->nid = $request->input('nid');
        $admins ->address = $request->input('address');
        $admins ->save();
        return redirect('adminregistration')->with('status',"Inserted successfully");

    }

    // public function profile()
    // {
    //     $admins = Admin::all();
    //     return view('adminprofile',compact('admins'));
    // }
    public function profile($id)
    {
        $admins = Admin::find($id);
        return view('/adminprofile',compact('admins'));
    }
    public function EditProfile($id)
    {
        $admins = Admin::find($id);
        return view('/editadminprofile',compact('admins'));
    }
    public function update(Request $request,$id)
    {
        $request-> validate(
            [
                'name' =>'required',
                'email' => "required|email",
                'phone' => 'required|numeric',
                'address' => 'required',
                'nid' => 'required'
            ]
        );

        $admins = Admin::find($id);
        $admins ->name = $request->input('name');
        $admins ->email = $request->input('email');
        $admins ->phone = $request->input('phone');
        $admins ->nid = $request->input('nid');
        $admins ->address = $request->input('address');
        $admins ->update();
        return redirect('/adminprofile/'.$id)->with('status',"Profile updated successfully..!!");

    }

}
