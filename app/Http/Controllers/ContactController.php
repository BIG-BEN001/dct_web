<?php

namespace App\Http\Controllers;

use App\Mail\ContactBack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /*TODO work on the email template page and contactback request class*/
    public function callBack(Request $request)
    {
    //        dd($request);
        $data = [
            'con_name' => $request->con_name,
            'con_email' => $request->con_email,
            'con_subject' => $request->con_subject,
            'con_message' => $request->con_message,
        ];
        //dd($data);
        //dd(env('MAIL_HOST'));
        Mail::to("sales@directcore.com")->send(new ContactBack($data));

        return back()->with('success', 'Thanks for contacting us');

    }

    public  function contact_form(){
        return view('email.contactus');
    }
}
