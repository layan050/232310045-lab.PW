<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('profiles.profile');
    }

    public function identity(){
        return view('profiles.identity');
    }

    public function family(){
        return view('profiles.family');
    }
}
