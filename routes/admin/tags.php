<?php


use App\Http\Controllers\Admin\TagController;

Route::get('tags/delete/{id}', [TagController::class, 'adminTagsModalAjaxDelete'])->name('admin.tags.modal.ajax.delete');
Route::resource('tags', TagController::class)->names('admin.tags');
