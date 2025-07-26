<?php
namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalDokter;
use App\Models\Dokter;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = JadwalDokter::with(['dokter', 'poli'])->get();
        $dokters = Dokter::all(); // Tambahkan ini jika digunakan di view
        return view('dokter.jadwal.index', compact('jadwals', 'dokters'));
    }
}
