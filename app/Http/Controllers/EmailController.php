<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeEmail;

class EmailController extends Controller
{
    public function sendEmail(){
        $data['toEmail'] = "kushbhatt700@gmail.com";
        $data['message'] = "Hello kush, Mail sent successfully.";
        $data['subject'] = "Don't worry It's test mail";

        // Direct way to send mail.
        // $request = Mail::send('welcomemail', ['data' => $data], function($message) use ($data){
        //     $message->to($data['toEmail'])->subject($data['subject']);
        // });
        
        // Via welcomeEmail class witch we have created in app/Mail/welcomeEmail. 
        $request = Mail::to($data['toEmail'])->send(new welcomeEmail($data['message'], $data['subject']));
        dd($request);
    }
}
