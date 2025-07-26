<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatPemeriksaan extends Model
{
    protected $fillable = [
        'pasien_id', 'dokter_id', 'tanggal_periksa', 'diagnosa', 'tindakan', 'obat_id'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
}
