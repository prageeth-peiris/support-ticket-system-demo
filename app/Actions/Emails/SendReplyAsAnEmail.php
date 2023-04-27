<?php

namespace App\Actions\Emails;

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Lorisleiva\Actions\Concerns\AsAction;

class SendReplyAsAnEmail
{

    use AsAction;

    public function handle(string $email,string $reply,string $ref_no){

        $email_message = "Reply for  Your ticket Ref. no {$ref_no}  :

        {$reply}
        ";


        return ;  //return as mail server is not configured

        Mail::raw($email_message, function (Message $message) use ($email) {
            $message->to($email)
                ->from(config('mail.from.address'));
        });


    }



}
