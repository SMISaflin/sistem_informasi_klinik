@extends('layouts.admin')

@section('content')
<h1>Dashboard Klinik</h1>

<div class="row mb-4">
    <div class="col">
        <div class="btn btn-primary w-100">Total Dokter<br>{{ $totalDokter }}</div>
    </div>
    <div class="col">
        <div class="btn btn-success w-100">Total Pasien<br>{{ $totalPasien }}</div>
    </div>
    <div class="col">
        <div class="btn btn-warning w-100">Total Poli<br>{{ $totalPoli }}</div>
    </div>
    <div class="col">
        <div class="btn btn-danger w-100">Total Obat<br>{{ $totalObat }}</div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Riwayat Pemeriksaan Terbaru
    </div>
    <div class="card-body p-0">
        <table class="table table-bordered mb-0">
            <thead class="table-light">
                <tr>
                    <th>Pasien</th>
                    <th>Dokter</th>
                    <th>Tanggal</th>
                    <th>Diagnosa</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @forelse($riwayats as $riwayat)
                    <tr>
                        <td>{{ $riwayat->pasien->nama }}</td>
                        <td>{{ $riwayat->dokter->nama }}</td>
                        <td>{{ \Carbon\Carbon::parse($riwayat->tanggal_periksa)->format('d-m-Y') }}</td>
                        <td>{{ $riwayat->diagnosa }}</td>
                        <td>{{ $riwayat->tindakan }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada riwayat pemeriksaan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-3 ms-2">
    {{ $riwayats->links() }}
</div>
    </div>
</div>

@endsection