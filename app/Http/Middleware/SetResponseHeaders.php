<?php

namespace App\Http\Middleware;

use Closure;

class SetResponseHeaders
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
        if($request->isMethod('post'))  {          
            $response = $next($request);
            return $response->header('Content-Type', 'application/json');
        }
        return $next($request);
    }
}
