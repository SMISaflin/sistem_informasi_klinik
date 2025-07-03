<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;

class ResepController extends Controller
{
    public function index()
    {
        $resep = Resep::where('status', 'menunggu')->get();
        return view('apoteker.resep.index', compact('resep'));
    }

    public function show($id)
    {
        $resep = Resep::findOrFail($id);
        return view('apoteker.resep.show', compact('resep'));
    }

    public function proses($id)
    {
        $resep = Resep::findOrFail($id);
        $resep->status = 'diproses';
        $resep->save();

        return redirect()->route('apoteker.resep.index')->with('success', 'Resep berhasil diproses.');
    }
}
