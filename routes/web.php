<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('verified');

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/', [MainController::class, 'dashboard'])->name('main');
    Route::resource('users', UserController::class);
});
