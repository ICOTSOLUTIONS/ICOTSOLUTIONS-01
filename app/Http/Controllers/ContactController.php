<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ],[],[
            'name'=>'Name',
            'email'=>'Email',
            'subject'=>'Subject',
            'message'=>'Message',
        ]);
        $email="icotsolutions@gmail.com";
        try {
            Mail::send(
                'pages.contact-mail',
                [
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'subject'=>$request->subject,
                    'messages'=>$request->message,
                ],
                function($message) use ($email){
                    $message->from(env('MAIL_USERNAME'));
                    $message->to($email);
                    $message->subject('Contact');
                }
            );
                session()->flash('message', 'Email Sent');
                session()->flash('messageType', 'success');
                return redirect()->back();
        } catch (\Throwable $th) {
            session()->flash('message', 'Email not Sent');
            session()->flash('messageType', 'success');
            return redirect()->back();
        }
    }
}
