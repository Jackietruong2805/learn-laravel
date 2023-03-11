<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPrice
{
    public function handle(Request $request, Closure $next): Response
    {
        echo 'Test middleware <br>';
        return $next($request);
    }
}
