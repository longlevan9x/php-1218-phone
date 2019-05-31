<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAdmin 
{
	public function handle($request, Closure $next, $guard = "admin") {

		if (!Auth::guard($guard)->check()) {
			return redirect('admin/login');
		}

		return $next($request);
	}
}