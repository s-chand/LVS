<?php

namespace App\Http\Middleware;

use Closure;

class MakePayments
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
        /**
         * Make the user pay for the service by redirecting to the payments site
         */
        
        return $next($request);
    }
}
