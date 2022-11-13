<?php

namespace App\Http\Controllers;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function view()
    {
        return view('DriverRegistration');
    }

    public function registration(Request $request)
    {
        $driver = new Driver();
        $driver ->name = $request->input('name');
        $driver ->email = $request->input('email');
        $driver ->password = $request->input('password');
        $driver ->phone = $request->input('phone');
        $driver ->nid = $request->input('nid');
        $driver ->address = $request->input('address');
        $driver ->save();
        return redirect('driverregistration')->with('status',"Inserted successfully");

    }
    public function profile($id)
    {
        // $email = session()->get('email');
        $driver = Driver::find($id);

        return view('/driverprofile',compact('driver'));
    }

    public function EditProfile($id)
    {
        $driver = Driver::find($id);
        return view('/editdriverprofile',compact('driver'));
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

        $driver = Driver::find($id);
        $driver ->name = $request->input('name');
        $driver ->email = $request->input('email');
        $driver ->phone = $request->input('phone');
        $driver ->nid = $request->input('nid');
        $driver ->address = $request->input('address');
        $driver ->update();
        return redirect('/driverprofile/'.$id)->with('status',"Profile updated successfully..!!");

    }

    function logout(Request $request){
       session()->forget('email');
        return redirect('home');

    }

    function home(){
        return view('home');
    }

}