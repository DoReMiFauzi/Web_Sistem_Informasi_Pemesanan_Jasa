<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitraProfile extends Model
{
    use HasFactory;

    protected $table = 'mitra_profiles';    

    protected $fillable = [
        'user_id',
        'nama_mitra',
        'status',
        'nama_usaha',
        'no_telp',
        'alamat',
        'NIK',
        'foto_ktp',
        'deskripsi',
        'jam_operasional_buka',
        'jam_operasional_tutup',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
