<?php

namespace App\Listeners;

use Log;
use Mail;
use App\Events\userMailSend;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class userMailSendListener
{

    public function handle(userMailSend $event): void
    {       
        dd($event['user_email']);
        Mail::send('mail.user-mail-send', ['eventData' => $event], function($message) use ($event){
            $message->to($event->eventData['user_email']);
            $message->subject($event->eventData['user_mail_subject']);
        });

        // Mail::to($event->eventData['user_email'])->send(new welcomeEmail($event->eventData['user_mail_modelMailMessage'], $event->eventData['user_mail_subject'], $event->eventData['user_email']));
    }
}
