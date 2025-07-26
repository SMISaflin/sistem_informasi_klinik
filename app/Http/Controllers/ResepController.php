<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;

class ResepController extends Controller
{
    public function index()
    {
        // Ambil semua data resep dari database
        $reseps = Resep::all();

        // Kirim data ke view 'resep.index'
        return view('apoteker.resep.index', compact('reseps'));
    }
}
