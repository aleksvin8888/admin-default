<?php

use App\Http\Controllers\Blog\BlogController;

Route::get('/', [BlogController::class, 'index'])->name('blog.index');
