<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CorsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
		return $next($request)
			->header('Access-Control-Allow-Origin', '*')
			->header('Access-Control-Allow-Headers: *')
        	->header('Access-Control-Allow-Methods: *');
    }
}
