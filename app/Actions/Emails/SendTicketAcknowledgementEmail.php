<?php

namespace App\Actions\Emails;

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Lorisleiva\Actions\Concerns\AsAction;

class SendTicketAcknowledgementEmail
{

    use AsAction;

    public function handle(string $email,string $ticket_ref_no){

$email_message = "We received your ticket . Your ticket Ref. no {$ticket_ref_no}";


        Mail::raw($email_message, function (Message $message) use ($email) {
            $message->to($email)
                ->from(config('mail.from.address'));
        });


    }




}
