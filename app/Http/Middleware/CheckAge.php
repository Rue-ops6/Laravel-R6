<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *      */
    public function handle($request, Closure $next)
    {
        if ($request->age && $request->age <= 18) {
            return redirect('home')->with('error', 'You must be 18 years or older.');
                }
        return $next($request);
    }
}
