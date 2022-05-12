<?php

namespace App\Http\Controllers\mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mail extends Controller
{
    public function index()
    {
        return view('user.abouts');
    }
}
