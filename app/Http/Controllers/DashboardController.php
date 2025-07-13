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
    public function index(Request $request)
    {
        $totalDokter = Dokter::count();
        $totalPasien = Pasien::count();
        $totalPoli = Poli::count();
        $totalObat = Obat::count();

        $query = RiwayatPemeriksaan::with(['pasien', 'dokter']);

        // Filter search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->whereHas('pasien', function ($q2) use ($search) {
                    $q2->where('nama', 'like', '%' . $search . '%');
                });

                $q->orWhereHas('dokter', function ($q2) use ($search) {
                    $q2->where('nama', 'like', '%' . $search . '%');
                });

                $q->orWhere('diagnosa', 'like', '%' . $search . '%');
                $q->orWhere('tindakan', 'like', '%' . $search . '%');
            });
        }

        // Filter tanggal
        if ($request->filled('tanggal_awal')) {
            $query->whereDate('tanggal_periksa', '>=', $request->tanggal_awal);
        }

        if ($request->filled('tanggal_akhir')) {
            $query->whereDate('tanggal_periksa', '<=', $request->tanggal_akhir);
        }

        // Pagination
        $riwayats = $query->latest()->paginate(6)->appends($request->query());

        return view('admin.dashboard', compact(
            'totalDokter', 'totalPasien', 'totalPoli', 'totalObat', 'riwayats'
        ));
    }
}
