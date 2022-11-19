<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request){
        $request->validate([
            'fname' => 'string|required',
            'lname' => 'string|required',
            'email' => 'email|required',
            'mobile' => 'numeric|required',
            'message' => 'string|required',
        ]);
        Mail::send('mail', ['message' => $request->message], function($mensahe) use($request){
                $mensahe->to($request->email);
                $mensahe->subject($request->message); 
        });
        return "<h3>Email send!!!</h3>";
    }
}
