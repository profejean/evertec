<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

/* Modules start sessions */

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');

Route::post('login', [App\Http\Controllers\UserController::class, 'login'])->name('login');

Route::post('register', [App\Http\Controllers\UserController::class, 'register'])->name('register');


/* Middlewares Auth Sessions */
Route::middleware(['userLogin'])->group(function () {

    /* This modules show products */
        Route::get('home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

    /* This modules orders */
        Route::get('orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders');
        Route::post('order/{id}', [App\Http\Controllers\OrderController::class, 'order'])->name('order');
        Route::get('checkout/{id}', [App\Http\Controllers\OrderController::class, 'checkout'])->name('checkout');   
        Route::post('order_rejected/{id}', [App\Http\Controllers\OrderController::class, 'delete'])->name('order_rejected');   
        Route::get('payment/{id}', [App\Http\Controllers\OrderController::class, 'payment'])->name('payment');    

});