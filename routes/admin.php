<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;


Route::get('/', [MainController::class, 'dashboard'])->name('admin.main');

require_once "admin/users.php";
require "admin/categories.php";
require "admin/tags.php";



