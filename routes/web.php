<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route admin
Route::resource('/admin', AdminController::class)->middleware('admin');
Route::get('/adminOrder', AdminController::class . '@order')->name('admin.order')->middleware('admin');

Route::resource('/product', ProductController::class);

Route::resource('/order', OrderController::class);

