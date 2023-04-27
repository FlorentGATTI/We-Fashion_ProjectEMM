<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, "index"]);

Route::get('/product', function () {
    return view('product');
});

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/listing', function () {
    return view('listing');
});

Route::get('/', [ProductController::class, 'filter'])->name('products.filter');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

