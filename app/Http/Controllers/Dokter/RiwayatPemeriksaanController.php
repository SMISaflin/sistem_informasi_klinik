<?php
namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RiwayatPemeriksaan;
use App\Models\Pasien;
use App\Models\Obat;
use Illuminate\Support\Facades\Auth;

class RiwayatPemeriksaanController extends Controller
{
    public function index()
    {
        $riwayats = RiwayatPemeriksaan::with(['pasien', 'dokter', 'obat'])->latest()->get();
        return view('dokter.riwayat.index', compact('riwayats'));
    }

    public function create()
    {
        $pasiens = Pasien::all();
        $obats = Obat::all();
        return view('dokter.riwayat.create', compact('pasiens', 'obats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required|exists:pasiens,id',
            'tanggal_periksa' => 'required|date',
            'diagnosa' => 'required|string|max:1000',
            'tindakan' => 'required|string|max:1000',
            'obat_id' => 'nullable|exists:obats,id',
        ]);

        RiwayatPemeriksaan::create([
            'pasien_id' => $request->pasien_id,
            'dokter_id' => Auth::user()->dokter->id ?? null, // Pastikan user login punya relasi dokter
            'tanggal_periksa' => $request->tanggal_periksa,
            'diagnosa' => $request->diagnosa,
            'tindakan' => $request->tindakan,
            'obat_id' => $request->obat_id,
        ]);

        return redirect()->route('dokter.riwayat.index')->with('success', 'Data riwayat berhasil disimpan.');
    }
}
