<?php

use App\Http\Controllers\Admin\UserController;

Route::get('users/delete/{id}', [UserController::class, 'adminUsersModalAjaxDelete'])->name('admin.users.modal.ajax.delete');
Route::resource('users', UserController::class)->names('admin.users');

