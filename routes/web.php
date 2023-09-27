<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Brand\AdminBrandController;
use App\Http\Controllers\Admin\Category\AdminCategoryController;
use App\Http\Controllers\Admin\Product\AdminProductController;
use App\Http\Controllers\Admin\Unit\AdminUnitController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;



// --------------- User Route -------------------- //

Route::controller(WebController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/product/view', 'productView')->name('product.view');
    Route::view('/shop', 'web.shop');
});



// --------------- Admin Route -------------------- //

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect(route('login'));
    });

    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/register', 'registerLoad');
        Route::post('/register', 'register')->name('register');
        Route::get('/login', 'loginLoad');
        Route::post('/login', 'login')->name('login');
        Route::post('/logout', 'logout')->name('logout');
    });
});
