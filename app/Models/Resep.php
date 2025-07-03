<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Resep extends Model
{
    use HasFactory;

    protected $fillable = ['pasien_id', 'deskripsi', 'status'];

    // Relasi ke model User (sebagai pasien)
    public function pasien()
    {
        return $this->belongsTo(User::class, 'pasien_id');
    }
}
