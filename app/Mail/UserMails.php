<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class UserMails extends Mailable
{
    use Queueable, SerializesModels;

    public $details;  

     
    public function __construct($user)  
    {  
        $this->details=$user;  
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'My Demo Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.welcomemails',
        );
    }
 
    public function build()
    {
        $details= $this->details;
        return view('emails.welcomemails', compact('details'));
    }

    // public function attachments()
    // {
    //     return [];
    // }
}