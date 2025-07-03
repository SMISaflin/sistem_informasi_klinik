@extends('layouts.apoteker')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-4">
    <h2>Dashboard</h2>
    <p>👋 Hallo! Selamat datang <strong>Administrator</strong>. 💼data laporan tersedia.</p>

    <div class="row g-3">
        <div class="col-md-3">
            <div class="bg-danger text-white p-3 rounded text-center">
                <h4>10</h4>
                <p>Pasien pengguna resep</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="bg-dark text-white p-3 rounded text-center">
                <h4>20</h4>
                <p>Data obat dalam persediaan</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="bg-primary text-white p-3 rounded text-center">
                <h4>7</h4>
                <p>Data resep dikeluarkan</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="bg-secondary text-white p-3 rounded text-center">
                <h4>15</h4>
                <p>Laporan resep masuk</p>
            </div>
        </div>
    </div>

 <div class="row mt-4 g-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Resep Terbaru</div>
            <div class="card-body p-0">
                <table class="table table-bordered mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Pasien</th>
                            <th>Dokter</th>
                            <th>Obat</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                        {{-- <tr>
                            {{-- <td>{{ $i + 1 }}</td>
                            <td>{{ $resep->pasien->nama }}</td>
                            <td>{{ $resep->dokter->nama }}</td>
                            <td>{{ $resep->obat->nama_obat ?? '-' }}</td> --}}
                            {{-- <td> --}}
                                {{-- @if($resep->status == 'selesai')
                                    <span class="badge bg-success">Diberikan</span>
                                @else
                                    <span class="badge bg-warning text-dark">Menunggu</span>
                                @endif --}}
                            {{-- </td> --}}
                        {{-- </tr> --}}
                        {{-- @empty --}}
                        <tr>
                            <td colspan="5" class="text-center">Belum ada resep terbaru</td>
                        </tr>
                        {{-- @endforelse --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
     <div class="col-md-4">
            <div class="bg-warning text-dark p-4 rounded text-center">
                <h1>6</h1>
                <p>Data user aplikasi</p>
            </div>
        </div>
</div>

       
</div>
@endsection