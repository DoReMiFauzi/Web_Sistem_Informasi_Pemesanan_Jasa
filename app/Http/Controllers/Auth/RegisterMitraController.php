<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MitraProfile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterMitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Auth.RegisterMitra');
    }

        public function register(Request $request)
    {
        $request->validate([
            'nama_mitra' => ['required', 'string', 'max:255'],
            'nama_usaha' => ['required', 'string', 'max:255'],
            'alamat' => ['nullable', 'string', 'max:255'],
            'NIK' => ['required', 'string', 'max:255', 'unique:mitra_profiles,NIK'],
            'foto_ktp' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'deskripsi' => ['nullable', 'string'],
            'jam_operasional_buka' => ['nullable', 'string'],
            'jam_operasional_tutup' => ['nullable', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'no_telp' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $user = User::create([
            'name' => $request->nama_mitra,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'password' => Hash::make($request->password),
            'role' => 'mitra', // Otomatis set sebagai mitra
        ]);

        // Simpan data mitra ke tabel mitra_jasa
        $mitraProfile = MitraProfile::create([
            'user_id' => $user->id,
            'nama_mitra' => $request->nama_mitra,
            'status' => 'pending', // Set status awal sebagai pending
            'nama_usaha' => $request->nama_usaha,
            'no_telp' => $request->no_telp,
            'alamat' => 'null',
            'NIK' => $request->NIK,
            'foto_ktp' => $request->file('foto_ktp')->store('foto_ktp', 'public'),
            'deskripsi' => $request->deskripsi,
            'jam_operasional_buka' => $request->jam_operasional_buka,
            'jam_operasional_tutup' => $request->jam_operasional_tutup,
        ]);

        $mitraProfile->save();
        
        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
