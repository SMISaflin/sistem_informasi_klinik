<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resep;
use Illuminate\Support\Facades\Auth;

class ResepController extends Controller
{
    /**
     * Menampilkan daftar semua resep untuk dokter.
     */
    public function index()
    {
        $reseps = Resep::with(['pasien', 'dokter'])->latest()->get();
        return view('dokter.resep.index', compact('reseps'));
    }

    /**
     * Menyimpan resep baru dari dokter untuk pasien.
     */
    public function store(Request $request)
    {
       $request->validate([
    'pasien_id' => 'required|exists:pasiens,id',
    'diagnosa' => 'required|string|max:1000',
    'resep' => 'required|string|max:2000',
    'deskripsi' => 'required|string|max:1000',
]);

Resep::create([
    'pasien_id' => $request->pasien_id,
    'dokter_id' => Auth::id(),
    'diagnosa' => $request->diagnosa,
    'resep' => $request->resep,
    'deskripsi' => $request->deskripsi,
]);


        return redirect()->back()->with('success', 'Resep berhasil disimpan.');
    }
}
