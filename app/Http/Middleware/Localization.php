<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Check header request and determine localizaton
        $local = ($request->hasHeader("Accept-Language")) ? $request->header("Accept-Language") : "en";
        // set laravel localization
        if(in_array($local,['en','sw'])){
            app()->setLocale($local);
        }else{
            app()->setLocale('en');
        }
        
        // continue request
        return $next($request);
    }
}
