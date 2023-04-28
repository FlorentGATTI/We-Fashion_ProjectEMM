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

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/auth', function () {
    return view('auth.login');
});

Route::get('/listing', function () {
    return view('listing');
});

Route::get('/', [ProductController::class, 'filter'])->name('products.filter');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/', [ProductController::class, "index"]);

// Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// Route::get('/auth', function () {
//     return view('auth');
// });

// Route::get('/listing', function () {
//     return view('listing');
// });

// Route::get('/', [ProductController::class, 'filter'])->name('products.filter');
// Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


// Route::get('/', function () {
//     return view('acceuil');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
