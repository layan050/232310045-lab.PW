<?php

use App\Http\Controllers\ProductsController;
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
Route::controller(ProductsController::class)->group(function () {
        Route::get('/master-data/products', 'index')->name('products.index');
        Route::get('/master-data/products/create', 'create')->name('products.create');
        Route::post('/master-data/products', 'store')->name('products.store');
        Route::get('/master-data/products/{id}', 'show')->name('products.show');
        Route::get('/master-data/products/edit/{id}', 'edit')->name('products.edit');
        Route::put('/master-data/products/{id}', 'update')->name('products.update');
        Route::get('/master-data/products/{id}/delete', function ($id) {
            $product = new \App\Models\Products();
            $deleted = $product->removeByCondition(['id' => $id]);

            return response()->json([
                'success' => $deleted,
                'message' => $deleted ? 'Product deleted successfully.' : 'Product deletion failed.'
            ]);
        });
    });