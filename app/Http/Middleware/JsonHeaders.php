<?php

namespace App\Http\Middleware;

use Closure;

/**
 * This middleware is created for correct validation handling to avoid redirects on ajax data validation
 *
 * Class JsonHeaders
 * @package App\Http\Middleware
 */
class JsonHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');

        return $next($request);
    }
}
