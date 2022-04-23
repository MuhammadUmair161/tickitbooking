<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class movieCotroller extends Controller
{
    public function index(){return(view('admin.movie.create'));}

    public function ticketPlan($id){
        $data = movie::find($id);
        return view('user.movie.ticketPlan')->with('movies', $data);
    }
    public function detail($id){
        $data = movie::find($id);
        return view('user.movie.detail')->with('movies', $data);
    }

    public function list(){
        $data = movie::all();
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
        return redirect(route('m-list'));
    }
}
