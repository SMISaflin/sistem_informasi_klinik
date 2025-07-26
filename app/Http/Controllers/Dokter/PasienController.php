<?php
namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::orderBy('nama_lengkap')->get();
        return view('dokter.pasien', compact('pasiens'));
    }
}
