<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if(!session()->has('mailid') && ($request->path() !='/auth/login' && $request->path() !='/auth/register')){
            return redirect('/auth/login')->with('fail','You must be logged in');
        }
    
        if(session()->has('mailid') && ($request->path() == '/auth/login' || $request->path() == '/auth/register')) {
            return back();
        }
    
        return $next($request)->header('Cache-Control','no-cache,no-store,max-age=0,must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires','sat 01 Jan 1990 00:00:00 GMT');
    }

}
