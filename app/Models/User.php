<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\MitraProfile;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'no_telp',
        'role', // superadmin, mitra, customer
    ];

    // Relasi ke profil mitra (jika user adalah mitra)
    public function mitraProfile()
    {
        return $this->hasOne(MitraProfile::class);
    }

    // Helper untuk cek role dengan cepat
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isMitra()
    {
        return $this->role === 'mitra';
    }

    public function isCustomer()
    {
        return $this->role === 'customer';
    }
}