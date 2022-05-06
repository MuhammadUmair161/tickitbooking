<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('post');
    }
    public function index()
    {
        return (view('admin.blog.create'));
    }
    public function post()
    {
        $data = blog::all();
        return view('user.blog.blog')->with('blog', $data);
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
}
