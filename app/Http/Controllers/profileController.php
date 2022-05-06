<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function create()
    {
        return view('user.profile.create');
    }

    public function save(Request $item)
    {
        $profile = new Profile();
        $profile->fName = $item['fname'];
        $profile->lName = $item['lname'];
        $profile->image = $item['image']->store('uploads/images/profile','public');

        $profile->save();
        return redirect(route('home'));
    }
}
