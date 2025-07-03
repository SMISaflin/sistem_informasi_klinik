<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'tanggal_lahir',
        'jenis_kelamin',
    ];

    /**
     * Relasi: Pasien memiliki banyak riwayat pemeriksaan.
     */
    public function riwayatPemeriksaans()
    {
        return $this->hasMany(RiwayatPemeriksaan::class);
    }
    public function resep()
{
    return $this->hasMany(Resep::class, 'pasien_id');
}
}
