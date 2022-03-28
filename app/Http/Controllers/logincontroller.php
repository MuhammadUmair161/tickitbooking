<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function index(){return(view('login.login'));}

    public function signup(){return(view('login.signup'));}
}
