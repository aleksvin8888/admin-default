<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

final class BlogController extends BaseController
{
    public function index(){
        return view('main.blog.index');
    }

}
