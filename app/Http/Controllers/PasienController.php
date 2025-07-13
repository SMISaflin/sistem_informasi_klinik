<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::latest()->get();
        return view('admin.pasien.index', compact('pasiens'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|string|size:16|unique:pasiens,nik',
            'nama_lengkap' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'pekerjaan' => 'nullable|string|max:100',
            'status_perkawinan' => 'required|in:Belum Kawin,Kawin,Duda,Janda',
            'gol_darah' => 'nullable|in:A,B,AB,O',
            'agama' => 'required|string|max:50',
        ]);

        Pasien::create($request->all());

        return redirect()->route('admin.pasien.index')->with('success', 'Data pasien berhasil ditambahkan');
    }

    public function edit(Pasien $pasien)
    {
        return view('admin.pasien.edit', compact('pasien'));
    }

    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nik' => 'required|string|size:16|unique:pasiens,nik,' . $pasien->id,
            'nama_lengkap' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'pekerjaan' => 'nullable|string|max:100',
            'status_perkawinan' => 'required|in:Belum Kawin,Kawin,Duda,Janda',
            'gol_darah' => 'nullable|in:A,B,AB,O',
            'agama' => 'required|string|max:50',
        ]);

        $pasien->update($request->all());

        return redirect()->route('admin.pasien.index')->with('success', 'Data pasien berhasil diperbarui');
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect()->route('admin.pasien.index')->with('success', 'Data pasien berhasil dihapus');
    }
}
