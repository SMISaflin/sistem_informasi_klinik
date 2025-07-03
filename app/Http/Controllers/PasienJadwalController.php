<?php

namespace App\Http\Controllers;
use App\Models\JadwalDokter;
use Illuminate\Http\Request;

class PasienJadwalController extends Controller
{
    public function index()
    {
        // Ambil jadwal dokter lengkap dengan relasi dokter dan poli
       // $jadwals = JadwalDokter::with(['dokter', 'poli'])->orderBy('hari')->get();

     //   return view('pasien.jadwalDokter', compact('jadwals'));
    }
}
