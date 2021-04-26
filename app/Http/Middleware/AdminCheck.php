<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->user()->role->title =='admin'){
            return $next($request);
        }

        return redirect('/home');
    }
}
