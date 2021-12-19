<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::middleware('web')->group(function() {
    Route::get('/', [StoreController::class, 'index'])->name('index');


    Route::prefix('/cart')->group(function() {
        Route::get('/', [CartController::class, 'index'])->name('cart.index');
        Route::delete('/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
    });

    Route::prefix('/shop')->group(function() {
        Route::get('/', function() {
            return redirect()->route('index');
        });
        
        Route::get('/drinks', [ShopController::class, 'drinks'])->name('shop.drinks');
        Route::get('/menus', [ShopController::class, 'menus'])->name('shop.menus');

        Route::post('/', [ShopController::class, 'storeShoppingCart'])->name('shop.addCart');
    });
});