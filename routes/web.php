<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'home'])->name('product.home');
Route::get('/product/{id}', [ProductController::class, 'page'])->name('product.page');
Route::get('/api/textsearch', [SearchController::class, 'textSearch'])->name('search.text');
Route::post('/imgsearch', [SearchController::class, 'imageSearchAI'])->name('search.image');
Route::get('/api/labeler', [SearchController::class, 'labelerStart']);

// Route::resource('product', ProductController::class); 
