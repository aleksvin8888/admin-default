<?php

use App\Http\Controllers\Admin\CategoryController;

Route::get('categories/delete/{id}', [CategoryController::class, 'adminCategoriesModalAjaxDelete'])->name('admin.categories.modal.ajax.delete');
Route::resource('categories', CategoryController::class)->names('admin.categories');
