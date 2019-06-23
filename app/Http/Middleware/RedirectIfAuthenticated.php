<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
	public function handle($request, Closure $next, $guard = null)
	{
		$defaultGuard = config('auth.defaults.guard');
		$action = $request->route()->getActionMethod();
		
		if($defaultGuard != $guard && $action == 'showLoginForm')
		{
			return redirect()->intended('login');
		}
			
		return $next($request);
	}
}