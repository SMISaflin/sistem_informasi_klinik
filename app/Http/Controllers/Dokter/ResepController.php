<?php
namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resep;
use Illuminate\Support\Facades\Auth;

class ResepController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required|exists:pasiens,id',
            'deskripsi' => 'required|string',
            'obat' => 'required|string',
        ]);

        Resep::create([
            'dokter_id' => Auth::user()->dokter->id, // asumsi user terhubung ke dokter
            'pasien_id' => $request->pasien_id,
            'deskripsi' => $request->deskripsi,
            'obat' => $request->obat,
            'status' => 'menunggu',
        ]);

        return redirect()->back()->with('success', 'Resep berhasil dikirim.');
    }
}
