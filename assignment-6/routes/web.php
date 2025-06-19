<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController; // Tambahkan baris ini di bagian atas file, di bawah 'use Illuminate\Support\Facades\Route;'

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

Route::get('/', function () {
    return view('welcome');
});

// --- Rute untuk halaman profil (Soal Nomor 3) ---
// Ketika user mengakses URL /profile, Laravel akan memanggil method index() dari ProfileController
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');