<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class BeforRequest
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
        $behaviour_info = array(
            'pid'=>getmypid(),
            'name'=>Auth::user()->name,
            'path'=>$request->path()
        );
        Log::channel('user')->info('',$behaviour_info);   
        return $next($request);
    }
}
