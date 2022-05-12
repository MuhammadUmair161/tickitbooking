<?php

namespace App\Http\Controllers\mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;


class mail extends Controller
{
    public function index()
    {
        $data=['name'=>"umair",'data'=>"hi umair"];
        $user['to']='wick99185@gmail.com';
        Mail::send('mail',$data,function($message)use($user){
            $message->to($user['to']);
            $message->subject('hi');
        });
    }
}
