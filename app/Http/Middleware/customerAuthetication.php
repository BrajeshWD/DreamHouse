<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class customerAuthetication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(($request->path()=="login" ) && $request->session()->has('user')){
            return redirect ('welcome');
        }        
        else{
        return $next($request);
             }
    }
}
