<?php

namespace App\Http\Controllers;

use Event;
use App\Models\UserDetails;
use App\Events\userMailSend;
use Illuminate\Http\Request;
use App\Jobs\userMailSendingQueue;

class UserMailSending extends Controller    
{
    public function mailSend(Request $request){
        // Validate the incoming request data
        $request->validate([
            'user_id' => 'required|integer',
            'modelMailSubject' => 'required|string|max:255',
            'modelMailMessage' => 'required|string',
        ]);

        // Fetch user by ID
        $user = UserDetails::find($request->user_id);

        $userData['user_email'] = $user->email;
        $userData['user_mail_subject'] = $request->modelMailSubject;
        $userData['user_mail_modelMailMessage'] = $request->modelMailMessage;

        // Using mail Event. 
        // Event::dispatch(new userMailSend($userData));

        // Using queue job.
        dispatch(new userMailSendingQueue($userData));

    }
}
