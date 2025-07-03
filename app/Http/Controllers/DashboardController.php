<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Poli;
use App\Models\Obat;
use App\Models\RiwayatPemeriksaan;

class DashboardController extends Controller
{
    public function index()
{
    $totalDokter = Dokter::count();
    $totalPasien = Pasien::count();
    $totalPoli = Poli::count();
    $totalObat = Obat::count();

    // Gunakan paginate(6) agar hanya 6 data per halaman
    $riwayats = RiwayatPemeriksaan::with(['pasien', 'dokter'])
                ->latest()
                ->paginate(6);

    return view('admin.dashboard', compact(
        'totalDokter', 'totalPasien', 'totalPoli', 'totalObat', 'riwayats'
    ));
}

}
