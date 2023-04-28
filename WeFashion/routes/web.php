<?php

use App\Http\Controllers\ProfileController;
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

Route::middleware('auth')->group(function () {
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
});

Route::get('/', [ProductController::class, "index"]);
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/listing', function () {
    return view('listing');
});

Route::get('/admin', function () {
    return redirect()->route('login');
});

Route::get('/', [ProductController::class, 'filter'])->name('products.filter');

require __DIR__ . '/auth.php';



// Route::middleware('auth')->group(function () {
//     Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//     Route::get('/admin/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

//     Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
// });

// Route::get('/', [ProductController::class, "index"]);

// Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// Route::get('/listing', function () {
//     return view('listing');
// });

// Route::get('/admin', function () {
//     return redirect()->route('login');
// });

// Route::get('/', [ProductController::class, 'filter'])->name('products.filter');
// Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// require __DIR__ . '/auth.php';
