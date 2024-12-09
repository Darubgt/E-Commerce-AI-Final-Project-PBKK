<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;

Route::get('/', [ProductController::class, 'home'])->name('product.home');
Route::get('/product/{id}', [ProductController::class, 'showProduct'])->name('product.page');
Route::get('/api/textsearch', [SearchController::class, 'textSearch'])->name('search.text');
Route::get('/category/{id}', [SearchController::class, 'category'])->name('search.category');
Route::post('/imgsearch', [SearchController::class, 'imageSearchAI'])->name('search.image');
Route::get('/api/labeler', [SearchController::class, 'labelerStart']);

// Route::resource('product', ProductController::class); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/addtocart', [ProductController::class, 'addToCart'])->name('product.cart');
    Route::get('/cart', [ProductController::class, 'showCart'])->name('product.carthome');
    Route::post('/deleterowcart', [ProductController::class, 'deleteCart'])->name('product.deletecart');
    Route::get('/payment', [ProductController::class, 'deleteAllCart'])->name('product.payment');
});

require __DIR__.'/auth.php';
