<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifică dacă utilizatorul este autentificat și este admin
        if (!auth()->check() || auth()->user()->role !== 'admin') {
            return redirect()->route('auth.login')->with('error', 'Access denied. Admins only.');
        }
        return $next($request);
    }
}
