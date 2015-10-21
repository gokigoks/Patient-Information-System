<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;


class RedirectIfNotLoggedin {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $auth;

    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
            if (!$this->auth->check()){
            
            return new RedirectResponse(url('auth/login'));

        }

        return $next($request);
    }

}
