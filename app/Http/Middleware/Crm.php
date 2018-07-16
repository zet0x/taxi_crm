<?php

namespace App\Http\Middleware;

use Closure;

class Crm
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
        if($request->premising->crm == 'true')
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('page.main');
        }
    }
}
