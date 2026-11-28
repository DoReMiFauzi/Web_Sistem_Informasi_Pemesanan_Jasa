<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckMitraApproved
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        // 1. Cek apakah user sudah login dan apakah dia adalah mitra
        if ($user && $user->role === 'mitra') {
            
            // Ambil status dari relasi mitraProfile
            $statusMitra = $user->mitraProfile->status ?? 'pending';

            // 2. Jika statusnya bukan 'approved', tendang keluar atau tolak akses
            if ($statusMitra !== 'approved') {
                Auth::logout(); // Logout otomatis agar sesi bersih
                
                return redirect()->route('login')->withErrors([
                    'email' => 'Akun mitra Anda masih dalam proses verifikasi oleh Admin.',
                ]);
            }
        }

        // 3. Jika sudah approved, silakan lanjut
        return $next($request);
    }
}
