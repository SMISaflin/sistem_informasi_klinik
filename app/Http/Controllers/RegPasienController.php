<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pasien; // Pastikan model Pasien sudah dibuat

class RegPasienController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'nik' => 'required|numeric|unique:pasiens,nik',
            'nama_lengkap' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'pekerjaan' => 'nullable|string|max:100',
            'status_perkawinan' => 'nullable|in:Belum Kawin,Kawin,Duda,Janda',
            'gol_darah' => 'nullable|in:A,B,AB,O',
            'agama' => 'required|string|max:50',
        ]);

        // Simpan ke database
        Pasien::create($validated);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Data pasien berhasil ditambahkan.');
    }
}
