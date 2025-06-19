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

        // $data = array();
        // $data['title']= "Sample IF ELSE";
        // $data['npm'] = 222310054;

$data = array();

$data['title'] = "Blade Directive";

$data['npm'] = 212310054;

$students[] = array("npm"=>212310004, "name"=>"Virgi");

$students[] = array("npm"=>212310029, "name"=>"Lyan");

$students[] = array("npm"=>212310044, "name"=>"Utza");

$students[] = array("npm"=>212310027, "name"=>"Toriq");

$students[] = array("npm"=>212310005, "name"=>"Ajun");

$data['students'] = $students;

return view('modules.home.home')->with("data", $data);
}
}
