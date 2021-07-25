<?php

use App\Http\Controllers\Main\Blog\BlogController;

Route::resource('blogs', BlogController::class)->names('blogs');
