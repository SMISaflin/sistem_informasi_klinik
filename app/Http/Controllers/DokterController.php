<?php

namespace App\Http\Controllers;
use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::all();
        return view('admin.dokter.index', compact('dokters'));
    }

    public function create()
    {
        return view('admin.dokter.create');
    }

    public function store(Request $request)
{

    $request->validate([
        'nama' => 'required|string|max:255',
        'spesialis' => 'required|string|max:255',
        'no_hp' => 'required|string|max:15',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // validasi gambar
    ]);

    $data = $request->only(['nama', 'spesialis', 'no_hp']);

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $namaFile = time().'_'.$gambar->getClientOriginalName();
        $gambar->move(public_path('images/dokter'), $namaFile);
        $data['gambar'] = 'images/dokter/' . $namaFile;
    }

    Dokter::create($data);

    return redirect()->route('admin.dokter.index')->with('success', 'Data dokter berhasil ditambahkan.');
}


    public function show(Dokter $dokter)
    {
        return view('admin.dokter.show', compact('dokter'));
    }

    public function edit(Dokter $dokter)
    {
        return view('admin.dokter.edit', compact('dokter'));
    }

    public function update(Request $request, Dokter $dokter)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'spesialis' => 'required|string|max:255',
        'no_hp' => 'required|string|max:15',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->only(['nama', 'spesialis', 'no_hp']);

    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($dokter->gambar && file_exists(public_path($dokter->gambar))) {
            unlink(public_path($dokter->gambar));
        }

        $gambar = $request->file('gambar');
        $namaFile = time().'_'.$gambar->getClientOriginalName();
        $gambar->move(public_path('images/dokter'), $namaFile);
        $data['gambar'] = 'images/dokter/' . $namaFile;
    }

    $dokter->update($data);

    return redirect()->route('admin.dokter.index')->with('success', 'Data dokter berhasil diperbarui.');
}


    public function destroy(Dokter $dokter)
{
    // Hapus gambar dari folder jika ada
    if ($dokter->gambar && file_exists(public_path($dokter->gambar))) {
        unlink(public_path($dokter->gambar));
    }

    // Hapus data dokter dari database
    $dokter->delete();

    return redirect()->route('admin.dokter.index')->with('success', 'Data dokter dan gambarnya berhasil dihapus.');
}

}