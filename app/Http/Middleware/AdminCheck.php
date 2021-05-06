<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Auth;
use Closure;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user() && Auth::user()->isAdmin()) {
            return $next($request);
        }

        return redirect()->route('main');
    }
}
