<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile' , [App\Http\Controllers\ProfileController::class, 'index']);
Route::get('/profile/identity', [App\Http\Controllers\ProfileController::class, 'identity']);
Route::get('/profile/family', [App\Http\Controllers\ProfileController::class, 'family']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);