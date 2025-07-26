<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Resep extends Model
{
    use HasFactory;

    protected $table = 'resep';

    protected $fillable = ['pasien_id', 'dokter_id', 'diagnosa', 'resep', 'deskripsi'];

    public function pasien()
    {
        return $this->belongsTo(User::class, 'pasien_id');
    }

    public function dokter()
    {
        return $this->belongsTo(User::class, 'dokter_id');
    }
}
