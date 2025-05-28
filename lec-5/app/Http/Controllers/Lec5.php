<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lec5 extends Controller
{
    public function index(){
        return view("index");
    }
    public function L5(){
        return view ("Lec5");
    }
}
