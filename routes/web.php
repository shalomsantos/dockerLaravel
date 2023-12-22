<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']) -> name('home');

route::resource('users', UserController::class);

route::resource('products', ProductController::class);

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/car-shop', function () {
    return view('car-shop');
});

Route::get('/about', function () {
    return view('about');
});
