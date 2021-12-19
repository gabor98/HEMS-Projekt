<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopCategoryController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('web')->group(function() {
    Route::get('/', [StoreController::class, 'index'])->name('index');

    Route::resource('cart', CartController::class);
    Route::resource('shop', ShopCategoryController::class);
});