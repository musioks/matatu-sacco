<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
class MemberMiddleware
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
            //User should be authenticated.
        //Authenticated user should be a client
        if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug=='member') {
            return $next($request);
        }
        else{
            return redirect()->route('login');
        }
    }
}
