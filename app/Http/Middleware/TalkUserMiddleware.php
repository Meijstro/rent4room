<?php

namespace App\Http\Middleware;

use Nahid\Talk\Facades\Talk;
use Closure;
use Auth;

class TalkUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Talk::setAuthUserId(Auth::id());
        return $next($request);
    }
}
