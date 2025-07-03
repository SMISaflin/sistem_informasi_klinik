<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_poli',
        'keterangan',
    ];

    /**
     * Relasi: Poli memiliki banyak jadwal dokter.
     */
    public function jadwalDokters()
    {
        return $this->hasMany(JadwalDokter::class);
    }
}