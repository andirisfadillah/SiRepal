<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Ceklevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$levels)
{
    if (auth()->check() && in_array($request->user()->level, $levels)) {
        return $next($request);
    }
    return redirect('/login')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
}

}