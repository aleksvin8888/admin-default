<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Auth;

abstract  class BaseController extends Controller
{

    public $admin;

    public function __construct()
    {
        $this->middleware(['admin', 'unblocked']);

        if (Auth::check()) {
            $this->admin = Auth::user();
        }
    }

}
