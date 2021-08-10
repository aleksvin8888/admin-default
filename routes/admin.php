<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

Route::prefix('admin')->group(function() {
    Route::get('/', [MainController::class, 'dashboard'])->name('admin.main');
    Route::get('users/delete/{id}', [UserController::class, 'adminUsersModalAjaxDelete'])->name('admin.users.modal.ajax.delete');
    Route::resource('users', UserController::class)->names('admin.users');

    Route::get('categories/delete/{id}', [CategoryController::class, 'adminCategoriesModalAjaxDelete'])->name('admin.categories.modal.ajax.delete');
    Route::resource('categories', CategoryController::class)->names('admin.categories');

});
