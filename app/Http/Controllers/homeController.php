<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function trending(){
        $data = movie::all();
        return view('user.index')->with('movies', $data);
    }

}
