<?php

namespace App\Http\Controllers\Main\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('main.blog.index');
    }

//    public function show(){
//        return view('main.blog.show');
//    }
}
