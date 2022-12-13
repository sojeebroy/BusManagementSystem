<?php

namespace App\Http\Controllers;
use App\Models\Bus;
use Illuminate\Http\Request;


class BusController extends Controller
{
    public function view()
    {
        return view('busregistration');
    }
    public function registration(Request $request)
    {
        $request-> validate(
            [
                'number' =>'required',
                'route' => "required",
                'driverid' => 'required',
                'seatcapacity' => 'required|numeric'

            ]
        );

        $buses = new Bus();
        $buses ->number = $request->input('number');
        $buses ->route = $request->input('route');
        $buses ->driverid = $request->input('driverid');
        $buses ->seatcapacity = $request->input('seatcapacity');
        $buses ->save();
        return redirect('/busregistration')->with('status',"Inserted successfully");

    }
    public function AllBuses()
    {
        $buses =Bus::all();
        return view('allbuses',compact('buses'));
    }
    public function EditBus($id)
    {
        $buses = Bus::find($id);
        return view('/editbus',compact('buses'));
    }
    public function Delete($id)
    {
        $buses = Bus::find($id);
        $buses -> delete();
        return redirect('/allbuses')->with('status',"Bus deleted successfully");
    }
    public function update(Request $request,$id)
    {
        $request-> validate(
            [
                'number' =>'required',
                'route' => "required",
                'driverid' => 'required',
                'seatcapacity' => 'required|numeric'
            ]
        );
        $buses = Bus::find($id);
        $buses ->number = $request->input('number');
        $buses ->route = $request->input('route');
        $buses ->driverid = $request->input('driverid');
        $buses ->seatcapacity = $request->input('seatcapacity');
        $buses ->update();
        return redirect('/allbuses')->with('status',"Bus updated successfully..!!");
    }

}
