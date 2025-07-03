<?php

namespace App\Http\Controllers;
use App\Models\Dokter;
use App\Models\JadwalDokter;
use Illuminate\Http\Request;


class UserDokterController extends Controller
{
 public function tampilUntukPasien()
{
        $dokters = Dokter::all();
    return view('pasien.dashboard', compact('dokters'));
}
 public function tampiljadwalDokter()
{
     $jadwals = JadwalDokter::with(['dokter', 'poli'])->orderBy('hari')->get();
        $dokters = Dokter::all();
     return view('pasien.jadwalDokter', compact('jadwals', 'dokters'));
}

}
