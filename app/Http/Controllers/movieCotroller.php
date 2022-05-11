<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class movieCotroller extends Controller
{
    //-----create
    public function index()
    {
        $data = movie::all();
        return view('admin.movie.create')->with('movies', $data);
    }
    public function submit(Request $item)
    {
        $movie = new movie();
        $movie->name = $item['name'];
        $movie->desc = $item['desc'];
        $movie->language = $item['language'];
        $movie->genre = $item['genre'];
        $movie->released_at = $item['released_at'];
        $movie->poster = $item['poster']->store('uploads/images', 'public');
        $movie->trailer = $item['trailer'];
        $movie->save();
        return redirect(route('m-list'));
    }
    
    //----edit
    public function edit($id)
    {
        $data = movie::find($id);
        return view('admin.movie.edit')->with('movie',$data);
    }

    public function _update(Request $item, $id)
    {
        $movie = movie::find($id);
        $movie->name = $item['name'];
        $movie->desc = $item['desc'];
        $movie->released_at = $item['released_at'];
        if($item['language']!=null){
            $movie->language = $item['language'];
        }
        if($item['genre']!=null){
            $movie->genre = $item['genre'];
        }
        if($item['poster']!=null){
            $movie->poster = $item['poster']->store('uploads/images', 'public');
        }
        $movie->trailer = $item['trailer'];
        $movie->update();
        return redirect(route('m-create'));
    }
    //-------delete

    public function delete($id)
    {
        $movie = movie::find($id);
        $movie->delete();
        return redirect(route('m-create'));
    }

    public function ticketPlan($id)
    {
        $data = movie::find($id);
        return view('user.movie.ticketPlan')->with('movies', $data);
    }
    public function detail($id)
    {
        $data = movie::find($id);
        return view('user.movie.detail')->with('movies', $data);
    }

    public function list()
    {
        $data = movie::all();
        return view('user.movie.index')->with('movies', $data);
    }
}
