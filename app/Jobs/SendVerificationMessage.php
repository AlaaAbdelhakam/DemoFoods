<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Batchable;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\MyTestMail;
use DB;
use App\Mail\Posts;

class SendVerificationMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $datapost;

    public function __construct($data)
    {
    
        $this->datapost=$data;
        
    }
    public function handle()
    {
        $emails = DB::table('users')->where('role','admin')->pluck('email')->toArray();
        info($emails);
        // $data=['title'=> 'New posts added' , 'url' => ''];
        foreach($emails as $email){
             Mail::To($email)->send(new MyTestMail($this->datapost));
        }
     
       
    }
}