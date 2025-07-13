<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

   protected $fillable = [
        'nik',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'pekerjaan',
        'status_perkawinan',
        'gol_darah',
        'agama',
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
