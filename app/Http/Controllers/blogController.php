<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['post','detail']);
    }
    //---create
    public function index()
    {
        // $data = DB::table('blogs')->orderby('id','desc')->get();
        $data = blog::all();
        return view('admin.blog.create')->with('blog', $data);
    }

    public function submit(Request $item)
    {
        $blog = new Blog();
        $blog->title = $item['title'];
        $blog->sub_title = $item['sub_title'];
        $blog->blog = $item['blog'];
        $blog->user_id = auth()->user()->id;
        $blog->image = $item['image']->store('upload/blog/image', 'public');
        $blog->save();

        return redirect(route('blog'));
    }
    //---delete
    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect(route('blog-create'));
    }

    //---list
    public function detail($id)
    {
        $data = blog::find($id);
        return view('user.blog.detail')->with('blog', $data);
    }
    public function post()
    {
        $data = blog::all();
        // $data = DB::table('blogs')->orderby('id','desc')->get();
        return view('user.blog.blog')->with('blog', $data);
    }

}
