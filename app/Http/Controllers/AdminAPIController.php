<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;


class AdminAPIController extends Controller
{
    public function AdminList()
    {
        return Admin::all();
    }
    public function GetAdmin($id)
    {
        return Admin::find($id);
    }
    public function CreateAdmin(Request $request)
    {
        $admins = new Admin();
        $admins ->name = $request->name;
        $admins ->email = $request->email;
        $admins ->password = $request->password;
        $admins ->phone = $request->phone;
        $admins ->nid = $request->nid;
        $admins ->address = $request->address;
        $admins ->save();

        return $request;

    }

    public function EditAdmin(Request $request, $id)
    {
        $admins = Admin::find($id);
        $admins ->name = $request->name;
        $admins ->email = $request->email;
        $admins ->phone = $request->phone;
        $admins ->nid = $request->nid;
        $admins ->address = $request->address;
        $admins ->update();

        return $request;

    }

    public function DeleteAdmin($id)
    {
        $admins = Admin::find($id);
        $result = $admins->Delete();
        if($result)
        {
            return ["$result"=>"Selected admin is deleted..!!"];
        }
        else
        {
            return ["$result"=>"Selected admin is not deleted..!!"];

        }

    }

    public function UserList()
    {
        return User::all();
    }
}
