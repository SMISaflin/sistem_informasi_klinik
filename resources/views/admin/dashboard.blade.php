@extends('layouts.admin')

@section('content')
<h1 class="mt-n4">Dashboard Klinik</h1>

{{-- Statistika --}}
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

{{-- Riwayat Pemeriksaan --}}
<div class="card">
    <div class="card-header">
        Riwayat Pemeriksaan Terbaru
    </div>
    <div class="card-body">

        {{-- Filter dan Pencarian --}}
        <form method="GET" class="row g-2 mb-3">
            <div class="col-md-3">
                <input type="date" name="tanggal_awal" class="form-control"
                    value="{{ request('tanggal_awal') }}">
            </div>
            <div class="col-md-3">
                <input type="date" name="tanggal_akhir" class="form-control"
                    value="{{ request('tanggal_akhir') }}">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">Filter</button>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Reset</a>
            </div>
              <div class="col-md-3">
                <input type="text" name="search" class="form-control" placeholder="Cari pasien/dokter/diagnosa..."
                    value="{{ request('search') }}">
            </div>
        </form>

        {{-- Tabel Riwayat --}}
        <div class="table-responsive">
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
        </div>

        <div class="mt-3">
            {{ $riwayats->appends(request()->query())->links() }}
        </div>
    </div>
</div>
@endsection
