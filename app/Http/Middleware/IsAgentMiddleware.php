<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAgentMiddleware
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
        if(!auth()->check() || auth()->user()->is_admin != 0){
            return abort(403);
        }
        return $next($request);
    }
}
