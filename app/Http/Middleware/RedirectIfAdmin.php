<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAdmin 
{
	public function handle($request, Closure $next, $guard = "admin") {
		if (Auth::guard($guard)->check()) {
			return redirect('admin/home');
		}

		return $next($request);
	}
}