<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPemeriksaan;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Obat;

class RiwayatPemeriksaanController extends Controller
{
    public function index()
    {
        $riwayats = RiwayatPemeriksaan::with(['dokter', 'pasien', 'obat'])->latest()->get();
        return view('admin.riwayat_pemeriksaan.index', compact('riwayats'));
    }

    public function create()
    {
        $dokters = Dokter::all();
        $pasiens = Pasien::all();
        $obats = Obat::all();
        return view('admin.riwayat_pemeriksaan.create', compact('dokters', 'pasiens', 'obats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'dokter_id' => 'required',
            'pasien_id' => 'required',
            'tanggal_periksa' => 'required|date',
            'diagnosa' => 'required',
            'tindakan' => 'required',
            'obat_id' => 'required',
        ]);

        RiwayatPemeriksaan::create($request->all());

        return redirect()->route('admin.riwayat_pemeriksaan.index')->with('success', 'Data riwayat berhasil ditambahkan');
    }

    public function edit(RiwayatPemeriksaan $riwayat_pemeriksaan)
    {
        $dokters = Dokter::all();
        $pasiens = Pasien::all();
        $obats = Obat::all();
        return view('admin.riwayat_pemeriksaan.edit', [
            'riwayat' => $riwayat_pemeriksaan,
            'dokters' => $dokters,
            'pasiens' => $pasiens,
            'obats' => $obats
        ]);
    }

    public function update(Request $request, RiwayatPemeriksaan $riwayat_pemeriksaan)
    {
        $request->validate([
            'dokter_id' => 'required',
            'pasien_id' => 'required',
            'tanggal_periksa' => 'required|date',
            'diagnosa' => 'required',
            'tindakan' => 'required',
            'obat_id' => 'required',
        ]);

        $riwayat_pemeriksaan->update($request->all());

        return redirect()->route('admin.riwayat_pemeriksaan.index')->with('success', 'Data riwayat berhasil diperbarui');
    }

    public function destroy(RiwayatPemeriksaan $riwayat_pemeriksaan)
    {
        $riwayat_pemeriksaan->delete();
        return redirect()->route('admin.riwayat_pemeriksaan.index')->with('success', 'Data riwayat berhasil dihapus');
    }
}