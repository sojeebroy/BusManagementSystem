<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view()
    {
        return view('userregistration');
    }
    public function registration(Request $request)
    {
        $request-> validate(
            [
                'name' =>'required',
                'email' => "required|email",
                'password' => 'required|min:6',
                'phone' => 'required|numeric'

            ]
        );

        $users = new User();
        $users ->name = $request->input('name');
        $users ->email = $request->input('email');
        $users ->password = $request->input('password');
        $users ->phone = $request->input('phone');
        $users ->save();
        return redirect('/home')->with('status',"Inserted successfully");

    }
    public function profile($id)
    {
        $users = User::find($id);
        return view('/userprofile',compact('users'));
    }
    public function AllUsers()
    {
        $users =User::all();
        return view('allusers',compact('users'));
    }
    public function EditProfile($id)
    {
        $users = User::find($id);
        return view('/edituserprofile',compact('users'));
    }

    public function Delete($id)
    {
        $users = User::find($id);
        $users -> delete();
        return redirect('/allusers')->with('status',"Usser deleted successfully");
    }
    public function update(Request $request,$id)
    {
        $request-> validate(
            [
                'name' =>'required',
                'email' => "required|email",
                'phone' => 'required|numeric'
            ]
        );
        $users = User::find($id);
        $users ->name = $request->input('name');
        $users ->email = $request->input('email');
        $users ->phone = $request->input('phone');
        $users ->update();
        return redirect('/userprofile/'.$users->id)->with('status',"User updated successfully..!!");

    }


}
