<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CorsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
		$request->headers->set('Access-Control-Allow-Origin', '*');
		$request->headers->set('Access-Control-Allow-Headers', '*');
		$request->headers->set('Access-Control-Allow-Methods', '*');

		return $next($request);
    }
}
