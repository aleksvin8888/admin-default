<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [MainController::class, 'dashboard'])->name('main');
    Route::resource('users', UserController::class);
});

Route::resource('users', UserController::class);



