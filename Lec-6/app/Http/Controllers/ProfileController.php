<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('profile');
    }

    public function identity(){
        return view('identity');
    }
    

    public function family(){
        return view('family');
    }
}
