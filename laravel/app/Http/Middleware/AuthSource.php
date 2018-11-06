<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Log;

class AuthSource
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
        Log::debug('资源检查中间件。。。。');
        return $next($request);
    }
}
