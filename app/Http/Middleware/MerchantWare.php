<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Contracts\Auth\Guard;
class MerchantWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
	 protected $auth;
	 public function __construct(Guard $auth){
		 $this->auth=$auth;
	 }
    public function handle($request, Closure $next)
    {
		if($this->auth->getUser()->utype!="1"){
			abort("403","Unauthorized Action.");
		}
        return $next($request);
    }
}
