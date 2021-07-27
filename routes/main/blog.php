<?php

use App\Http\Controllers\Main\Blog\BlogController;

Route::resource('blog', BlogController::class)->names('blogs');
