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
    public function profile()
    {

        $driver = Driver::all();
        return view('#',compact('drivers'));
    }

}
