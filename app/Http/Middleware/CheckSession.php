<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Log;
use Sangria\JSONResponse;

class checkSession
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
        $admin_id = Session::get('admin_id');
        if($admin_id)
            return $next($request);
        else {
            $status_code = 450; //status_code for session flush
            $message = "You have been logged out";
            Log::info('Logged out');
            return JSONResponse::response($status_code, $message);
        }
    }
}
