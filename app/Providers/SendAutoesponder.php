<?php

namespace App\Providers;

use App\Providers\MessageWasReceived;
use Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendAutoesponder
{
    /**
     * Handle the event.
     *
     * @param  MessageWasReceived  $event
     * @return void
     */
    public function handle(MessageWasReceived $event)
    {
        $msg = $event->message;
        Mail::send('emails.contact', ['msg' => $msg], function($m) use ($msg) {
            $m->to($msg->email, $msg->name)->subject('Tu mensaje fue recibido');
        });
    }
}
