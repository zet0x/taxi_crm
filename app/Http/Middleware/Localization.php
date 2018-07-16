<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class Localization
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
        $lang = Session::get('local'); 
        
        if(empty($lang))
        {
            $lang = 'ru';
        }
        App::setLocale($lang);
        $request->localization = $lang;
        
        return $next($request);
    }
}
