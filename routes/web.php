<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified', 'unblocked'])->group(function () {

    Route::get('/home', [HomeController::class, 'home'])->name('main');
});

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified', 'admin', 'unblocked'])->prefix('admin')->group(function () {
    Route::get('/', [MainController::class, 'dashboard'])->name('main');
    Route::get('users/delete/{id}', [UserController::class, 'delete'])->name('delete');
    Route::resource('users', UserController::class);

});
