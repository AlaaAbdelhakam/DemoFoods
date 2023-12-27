<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyDemoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($user)
    {
        $this->details = $user;
    }

    public function build()
    {
        $details = $this->details;

        return $this->markdown('emails.userMails', compact('details'))
            ->subject('My Demo Mail');
    }
}