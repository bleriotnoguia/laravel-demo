<?php

namespace App\Http\Middleware;

use Closure;

class Ip
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
        if($request->ip()!='127.0.0.1'){
            return $next($request);
        }
        return response('Unauthorized', 401);
        // dd($request->ip());
        // return abort();
    }
}
