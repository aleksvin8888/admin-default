<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [MainController::class, 'dashboard'])->name('main');

});




