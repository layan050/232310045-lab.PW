<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
class ProfileController extends Controller
{
    
    public function index() 
    {
      
        $skillAkademikData = [
            [
                'course' => 'Matematika',
                'type' => 'Diskrit',
                'rate' => 4, 
            ],
            [
                'course' => 'Matematika',
                'type' => 'Aljabar Linear',
                'rate' => 3,
            ],
            [
                'course' => 'Basis Data',
                'type' => 'DDL',
                'rate' => 2,
            ],
            [
                'course' => 'Bhs Inggris',
                'type' => 'Speaker',
                'rate' => 1,
            ],
        ];

        
        return view('profile.index', compact('skillAkademikData'));
    }
}