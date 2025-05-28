<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lec5;


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

// Route::get('index', function () {
//     return view('index');
// });

// Route::get('index', function () {
//     return "Hello World!";
// });

//route with controller//

Route::get('index',[ Lec5::class,'index']);
Route::get('L5',[Lec5::class,'L5']);


