<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendmail;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;


class MailController extends Controller
{
    function index()
    {
     return view('mail');
    }

    function send(Request $request)
    {
        $admin="support@gmail.com";


        $data = array(
            'name'      =>  $request->name,
            'email'      =>  $request->email,
            
            'message'   =>   $request->message
        );

     Mail::to($admin)->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
    
}
