<?php

namespace App\Providers;

use App\Providers\MessageWasReceived;
use Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotificationToOwner
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
            $m->from($msg->email, $msg->name)
               ->to('lea.arturi@gmail.com', 'Leandro')
               ->subject('Tu mensaje fue recibido');
        });
    }
}
