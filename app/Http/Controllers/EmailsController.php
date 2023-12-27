<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendDataUsers;
use App\Mail\MyDemoMail;
use Illuminate\Support\Facades\Request as Input;
use App\Models\Emails;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class EmailsController extends Controller
{
    public function store(Request $request)
    {
        // try {
            // $this->validate($request, [
            //     'name' => 'required',
            //     'email' => 'required|email|unique:users,email',
            //     'password' => 'required|string',
            //     'role' => 'required'
            // ]);

            $user = Emails::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'company_name' => $request->get('company_name'),
                'message' => $request->get('message'),

            ]);

            $data=(object)[
                'id' => $user->id,
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'company_name' => $request->get('company_name'),
                'message' => $request->get('message'),
               ];
               Mail::to('alaa.abdelhakam@hotmail.com')->send(new MyDemoMail($data));

            //sales1@jawharafoods.com    dispatch(new SendDataUsers($data));
            //    dispatch(new UserMailsJob($data));
            Alert::success('Success', 'Email Sent Successfully');


        return redirect()->back()->withSuccess(__('Email Sent Successfully'));
        // } catch (\Exception $ex) {
        //     // Alert::error('Error Email', 'Error Happened');

        //     return redirect()->back();
        // }
    }
}