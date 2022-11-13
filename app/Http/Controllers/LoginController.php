<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Admin;
use App\Http\Controllers\DriverController;

class LoginController extends Controller
{
        function checkLogin(Request $request){

        $drivertable = new Driver();
        $admintable = new Admin();
        $driverresult=$drivertable->where('email',$request->email)->where('password',$request->password)->first();
        $adminresult=$admintable->where('email',$request->email)->where('password',$request->password)->first();

            if(!empty($driverresult)){

                session()->put("email",$request->email);
                return redirect()->route('driverprofile', [$driverresult->id]);

            }elseif(!empty($adminresult)){
                session()->put("email",$request->email);
                return view('AdminDashboard');
                
            }else{
                $output="wrong credentials";
                return $output;
            }

    }

    function login(Request $request){
        if(!isset($_SESSION['name'])){
            return view('login');
        }else{
            return redirect("driverprofile");
        }
    }
}
