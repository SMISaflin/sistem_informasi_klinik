<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalDokter;
use App\Models\Dokter;
use App\Models\Poli;

class JadwalDokterController extends Controller
{
    public function index()
    {
        $jadwals = JadwalDokter::with(['dokter', 'poli'])->latest()->get();
        return view('admin.jadwal_dokter.index', compact('jadwals'));
    }

    public function create()
    {
        $dokters = Dokter::all();
        $polis = Poli::all();
        return view('admin.jadwal_dokter.create', compact('dokters', 'polis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'dokter_id' => 'required',
            'poli_id' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        JadwalDokter::create($request->all());

        return redirect()->route('admin.jadwal_dokter.index')->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function edit(JadwalDokter $jadwal_dokter)
    {
        $dokters = Dokter::all();
        $polis = Poli::all();
        return view('admin.jadwal_dokter.edit', [
            'jadwal' => $jadwal_dokter,
            'dokters' => $dokters,
            'polis' => $polis
        ]);
    }

    public function update(Request $request, JadwalDokter $jadwal_dokter)
    {
        $request->validate([
            'dokter_id' => 'required',
            'poli_id' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        $jadwal_dokter->update($request->all());

        return redirect()->route('admin.jadwal_dokter.index')->with('success', 'Jadwal berhasil diperbarui');
    }

    public function destroy(JadwalDokter $jadwal_dokter)
    {
        $jadwal_dokter->delete();
        return redirect()->route('admin.jadwal_dokter.index')->with('success', 'Jadwal berhasil dihapus');
    }
}
