<?php

namespace App\Http\Controllers;

use App\Models\commit;
use Illuminate\Http\Request;

class commitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function commit(Request $item,$id){
        $commit = new commit();
        $commit->commit = $item['commit'];
        $commit->blog_id = $id;
        $commit->user_id = auth()->user()->id;
        $commit->save();
    }
}
