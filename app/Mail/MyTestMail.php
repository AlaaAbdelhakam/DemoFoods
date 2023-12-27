<?php

namespace App\Mail;
use App\Models\Post;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;


    public $details; 
    public function __construct($post)
    {
        $this->details = $post;
    }

    public function build()
    {
        $details = $this->details;
        return $this->view('emails.myTestMail',compact('details'));

    }

    public function attachments()
    {
        return [];
    }
}