<?php

namespace App\Http\Middleware;

use Closure;

class Message
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
        if($request->premising->message == 'true')
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('page.main');
        }
    }
}
