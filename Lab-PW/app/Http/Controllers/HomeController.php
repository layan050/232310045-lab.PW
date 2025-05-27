<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // return view('modules.home.home', [
        //     'title' => 'Home',
        //     'description' => 'Welcome to the home page.',
        // ]);

        $data = array();
        $data['title']= "Sample IF ELSE";
        $data['npm'] = 222310053;
        return view('modules.home.home')->with("data", $data);
    }
}
