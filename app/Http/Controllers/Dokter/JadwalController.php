<?php
namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Models\JadwalDokter;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function index()
    {
        // Ambil user login (dokter), lalu cari id-nya di tabel dokters
        $dokter = Auth::user();

        // Asumsikan 1 user = 1 dokter
        $jadwals = JadwalDokter::with('poli')
            ->where('dokter_id', $dokter->id)
            ->orderBy('hari')
            ->get();

        return view('dokter.jadwal', compact('jadwals'));
    }
}
