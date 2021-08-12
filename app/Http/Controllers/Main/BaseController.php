<?php


namespace App\Http\Controllers\Main;


use App\Http\Controllers\Controller;
use Auth;

abstract  class BaseController extends Controller
{

    public $user;

    public function __construct()
    {

        if (Auth::check()) {
            $this->user = Auth::user();
        }
    }

}
