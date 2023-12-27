<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Mail\MyDemoMail;
use DB;
use Illuminate\Support\Facades\Mail;

class SendDataUsers implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $userData;

    public function __construct($user)
    {
    
        $this->userData=$user;
        
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
    
        // $emails = DB::table('users')->where('role','admin')->pluck('email')->toArray();

        // info($emails);
        // \Log::info('Sending email with view: emails.my_demo_mail', ['data' => $this->userData]);

        // foreach($emails as $email){
            Mail::to('alaa.abdelhakam@hotmail.com')->send(new MyDemoMail($this->userData));
    //    } 
    }
}