<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ApotekerObatController extends Controller
{
    public function index()
    {
        $obat = Obat::all();
        return view('apoteker.obat.index', compact('obat'));
    }

    public function create()
    {
        return view('apoteker.obat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        Obat::create($request->all());

        return redirect()->route('apoteker.obat.index')->with('success', 'Obat berhasil ditambahkan.');
    }

    public function show($id)
    {
        $obat = Obat::findOrFail($id);
        return view('apoteker.obat.show', compact('obat'));
    }

    public function edit($id)
    {
        $obat = Obat::findOrFail($id);
        return view('apoteker.obat.edit', compact('obat'));
    }

    public function update(Request $request, $id)
    {
        $obat = Obat::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        $obat->update($request->all());

        return redirect()->route('apoteker.obat.index')->with('success', 'Obat berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return redirect()->route('apoteker.obat.index')->with('success', 'Obat berhasil dihapus.');
    }
}
