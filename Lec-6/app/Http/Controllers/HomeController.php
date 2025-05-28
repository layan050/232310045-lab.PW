<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // return view('modules.home.home' , ["title" =>"Hello World"] , ["name" => "Layan"]);
        return view('modules.home.home')->with("title" , "Hello World");
        }
}
