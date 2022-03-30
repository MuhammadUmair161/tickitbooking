<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class movieCotroller extends Controller
{
    public function index(){return(view('admin.movie.create'));}

    public function list(){
        $data = movie::all();
        // dd($data);
        return view('user.movie.index')->with('movies', $data);
    }
    
    public function submit(Request $item){        
        $movie =new movie();
        $movie->name = $item['name'];
        $movie->desc = $item['desc'];
        $movie->language = $item['language'];
        $movie->genre = $item['genre'];
        $movie->released_at = $item['released_at'];
        $movie->poster = $item['poster']->store('uploads/images','public');
        $movie->trailer = $item['trailer'];

        $movie->save();
        return redirect('m-list');
    }
}
