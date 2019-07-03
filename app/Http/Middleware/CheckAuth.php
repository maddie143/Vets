<?php namespace App\Http\Middleware;


class CheckAuth
{
    public function handle($request, \Closure $next, $guard = null){
        if(!\Auth::guard()->user()){
            return redirect(route('show_login'));
        }
        return $next($request);
    }

}