<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Tambahkan ini

class Dokter extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'spesialis',
        'no_hp',
        'gambar',
    ];

    /**
     * Relasi: Dokter punya banyak jadwal.
     */
    public function jadwalDokter()
    {
        return $this->hasMany(JadwalDokter::class);
    }

    /**
     * Relasi: Dokter menangani banyak pemeriksaan.
     */
    public function riwayatPemeriksaans()
    {
        return $this->hasMany(RiwayatPemeriksaan::class);
    }
}
