<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bus;


class BusAPIContoller extends Controller
{
    public function BusList()
    {
        return Bus::all();
    }
    public function GetBus($id)
    {
        return Bus::find($id);
    }

    public function CreateBus(Request $request)
    {
        $buses = new Bus();
        $buses ->number = $request->number;
        $buses ->route = $request->route;
        $buses ->driverId = $request->driverId;
        $buses ->seatCapacity = $request->seatCapacity;
        $buses ->save();

        return $request;

    }
    public function EditBus(Request $request, $id)
    {
        $buses = Bus::find($id);
        $buses ->number = $request->number;
        $buses ->route = $request->route;
        $buses ->driverId = $request->driverId;
        $buses ->seatCapacity = $request->seatCapacity;
        $buses ->update();

        return $request;

    }
    public function DeleteBus($id)
    {
        $buses = Bus::find($id);
        $result = $buses->Delete();
        if($result)
        {
            return ["$result"=>"Selected Bus is deleted..!!"];
        }
        else
        {
            return ["$result"=>"Selected Bus is not deleted..!!"];

        }

    }
}
