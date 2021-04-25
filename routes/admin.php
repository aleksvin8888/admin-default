<?php


use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\UserController;

Route::middleware(['auth', 'verified', 'admin', 'unblocked'])->prefix('admin')->group(function () {
    Route::get('/', [MainController::class, 'dashboard'])->name('main');
    Route::get('users/delete/{id}', [UserController::class, 'delete'])->name('delete');
    Route::resource('users', UserController::class);

});

