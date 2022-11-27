<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetResponseHeadersMiddleware
{
    public function handle(Request $request, Closure $next)
    {
		$request->headers->set('Accept', 'application/json');
		$request->headers->set('Access-Control-Allow-Origin', '*');
		$request->headers->set('Content-Type', 'application/json');

		return $next($request);
    }
}