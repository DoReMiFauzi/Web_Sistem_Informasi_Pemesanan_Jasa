<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // 1. Cek apakah user sudah login dan apakah rolenya sesuai dengan parameter yang dikirim
        if ($request->user() && $request->user()->role === $role) {
            return $next($request); // Lanjutkan akses jika cocok
        }

        // 2. Jika tidak cocok atau bukan rolenya, tolak akses (Munculkan error 403 / Forbidden)
        abort(403, 'Unauthorized action.');
    }
}
