<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Poli;

class PoliController extends Controller
{
    public function index()
    {
        $polis = Poli::latest()->get();
        return view('admin.poli.index', compact('polis'));
    }

    public function create()
    {
        return view('admin.poli.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_poli' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        Poli::create($request->all());

        return redirect()->route('admin.poli.index')->with('success', 'Data poli berhasil ditambahkan');
    }

    public function edit(Poli $poli)
    {
        return view('admin.poli.edit', compact('poli'));
    }

    public function update(Request $request, Poli $poli)
    {
        $request->validate([
            'nama_poli' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        $poli->update($request->all());

        return redirect()->route('admin.poli.index')->with('success', 'Data poli berhasil diperbarui');
    }

    public function destroy(Poli $poli)
    {
        $poli->delete();
        return redirect()->route('admin.poli.index')->with('success', 'Data poli berhasil dihapus');
    }
}