<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index($id)
    {
        $data = Profile::find($id);
        return view('user.profile.profile')->with('profile',$data);
    }

    public function edit(Request $item ,$id)
    {
        // dd('.');
        $profile = Profile::find($id);
        $profile->fName = $item['fname'];
        $profile->lName = $item['lname'];
        $profile->desc = $item['desc'];
        $profile->image = $item['image']->store('uploads/images/profile','public');

        $profile->update();
        return redirect(route('home'));
    }

    public function create()
    {
        return view('user.profile.create');
    }

    public function save(Request $item)
    {
        $profile = new Profile();
        $profile->fName = $item['fname'];
        $profile->lName = $item['lname'];
        $profile->user_id = auth()->user()->id;
        $profile->image = $item['image']->store('uploads/images/profile','public');

        $profile->save();
        return redirect(route('home'));
    }
}
