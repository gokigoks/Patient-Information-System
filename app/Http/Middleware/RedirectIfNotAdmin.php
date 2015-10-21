<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;

class RedirectIfNotAdmin
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

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
        if(!$this->auth->check()){
            flash()->overlay('you must be logged in to access that content');
            return new RedirectResponse(url('auth/login'));

        }

        $role = \Auth::user()->role;
        
        if($role == "nurse")
        {
            return $next($request);            
        }
        else{

            if($role == "doctor"){
                flash()->overlay('contact admin to access that content');
                return new RedirectResponse(url('doctor/home'));
            }
            else{
            flash()->overlay('you need privilages to access that content');
                return new RedirectResponse(url('user/home'));
            }           
        }
    }
}
