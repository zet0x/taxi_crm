<?php

namespace App\Http\Middleware;

use Closure;

class User
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
        if($request->premising->user == 'true')
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('page.main');
        }
    }
}
