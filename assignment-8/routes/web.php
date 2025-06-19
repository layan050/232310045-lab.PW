<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/sign-up', [AuthController::class, 'showSignupForm'])->name('signup.show');


Route::post('/register', [AuthController::class, 'register'])->name('register');


Route::get('/signin', [AuthController::class, 'showSigninForm'])->name('signin.show');


Route::post('/login', [AuthController::class, 'login'])->name('login');




Route::get('/dashboard', function() {
    return '<h1>Selamat datang di Dashboard!</h1><p>Anda berhasil login.</p>';
})->name('dashboard');


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');