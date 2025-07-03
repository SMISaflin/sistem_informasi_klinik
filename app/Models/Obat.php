<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_obat',
        'jenis_obat',
        'stok',
        'harga',
        'keterangan',
    ];

    /**
     * Obat mungkin digunakan di banyak riwayat pemeriksaan.
     */
    public function riwayatPemeriksaans()
    {
        return $this->hasMany(RiwayatPemeriksaan::class);
    }
}
