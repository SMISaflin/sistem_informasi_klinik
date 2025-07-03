<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class JadwalDokter extends Model
{
    use HasFactory;
    
    protected $table = 'jadwal_dokters'; // atau 'jadwal_dokter' jika itu nama tabel kamu
    protected $fillable = [
        'dokter_id',
        'poli_id',
        'hari',
        'jam_mulai',
        'jam_selesai',

    ];
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function poli()
    {
        return $this->belongsTo(Poli::class);
    }
}
