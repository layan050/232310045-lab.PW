<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return "hello world";
// });

//route basic controller

Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/profile/identity', [ProfileController::class, 'identity']);
Route::get('/profile/family', [ProfileController::class, 'family']);
Route::get('/home', [HomeController::class, 'index']);