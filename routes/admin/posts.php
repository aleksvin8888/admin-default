<?php


use App\Http\Controllers\Admin\PostController;

Route::get('posts/delete/{id}', [PostController::class, 'adminPostsModalAjaxDelete'])->name('admin.posts.modal.ajax.delete');
Route::resource('posts', PostController::class)->names('admin.posts');
