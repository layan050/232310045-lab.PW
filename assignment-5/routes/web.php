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



Route::get('/biodata', function () {
    $data = [
        'nama' => 'Andi Saputra',
        'alamat' => 'Jl. Merdeka No.123, Jakarta',
        'email' => 'andi@example.com',
        'deskripsi' => 'Saya seorang web developer dengan minat di bidang backend development.'
    ];
    return view('biodata', $data);
});
