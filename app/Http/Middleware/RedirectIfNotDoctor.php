<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotDoctor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {   
         if (!$this->auth->check()){
            
            return new RedirectResponse(url('auth/login'));

        }

        $role = \Auth::user()->role;

        if($role != "doctor"){
                
            return new RedirectResponse(url('user/home'));

        }
        return $next($request);
    }
}
