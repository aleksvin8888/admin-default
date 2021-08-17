<?php

use App\Http\Controllers\Main\BlogController;

Route::resource('blog', BlogController::class)->names('blog');
