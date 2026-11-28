<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Auth.LoginPage');
    }

    // Memproses data login
    public function login(Request $request)
    {
        // 1. Validasi input email dan password
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        // 2. Coba autentikasi menggunakan Auth::attempt
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();

            // 3. KHUSUS MITRA: Cek apakah status usahanya sudah di-approve oleh Admin
            if ($user->role === 'mitra') {
                // Ambil status dari relasi mitraProfile
                $statusMitra = $user->mitraProfile->status ?? 'pending';

                if ($statusMitra !== 'approved') {
                    // Jika belum disetujui (masih pending atau rejected), logout-kan kembali
                    Auth::logout();
                    $request->session()->invalidate();
                    $request->session()->regenerateToken();

                    return back()->withErrors([
                        'email' => 'Akun mitra Anda masih dalam proses verifikasi oleh Admin atau ditolak.',
                    ]);
                }
            }

            // 4. Arahkan (Redirect) berdasarkan role setelah berhasil login
            if ($user->role === 'admin') {
                return redirect()->intended(route('admin.dashboard'));
                    } elseif ($user->role === 'mitra') {
                        return redirect()->intended(route('mitra.dashboard'));
                    } else {
                return redirect()->intended(route('costumer.dashboard')); // Untuk Customer / Pelanggan
            }
        }

        // 5. Jika login gagal (email/password salah)
        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
