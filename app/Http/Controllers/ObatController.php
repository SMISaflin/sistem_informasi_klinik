<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function index()
    {
        $obats = Obat::latest()->get();
        return view('apoteker.obat.index', compact('obat'));
    }

    public function create()
    {
        return view('apoteker.obat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'jenis_obat' => 'required|string|max:255',
            'stok' => 'required|integer',
            'keterangan' => 'nullable|string',
        ]);

        Obat::create($request->all());

        return redirect()->route('apoteker.obat.index')->with('success', 'Data obat berhasil ditambahkan');
    }

    public function edit(Obat $obat)
    {
        return view('apoteker.obat.edit', compact('obat'));
    }

    public function update(Request $request, Obat $obat)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'jenis_obat' => 'required|string|max:255',
            'stok' => 'required|integer',
            'keterangan' => 'nullable|string',
        ]);

        $obat->update($request->all());

        return redirect()->route('apoteker.obat.index')->with('success', 'Data obat berhasil diperbarui');
    }

    public function destroy(Obat $obat)
    {
        $obat->delete();
        return redirect()->route('apoteker.obat.index')->with('success', 'Data obat berhasil dihapus');
    }
}
