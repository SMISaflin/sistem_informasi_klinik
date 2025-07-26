@extends('layouts.apoteker')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">

    <!-- Header -->
    <div class="card shadow-sm rounded-4 border-0 mb-4 bg-white">
    <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h2 class="fw-bold mb-1">
                <i class="text-primary"></i> Dashboard
            </h2>
            <p class="text-muted mb-0">
                <span class="fw-semibold text-dark">Hallo! Selamat datang</span> 
                <span class="fw-bold text-primary">Administrator</span>.
                <i class="bi bi-clipboard-data text-secondary ms-1"></i> Data laporan tersedia.
            </p>
        </div>
        <div class="mt-3 mt-md-0">
            <span class="badge bg-success-subtle text-success fs-6 p-2 px-3 rounded-pill shadow-sm">
                <i class="bi bi-check-circle me-1"></i> Sistem Aktif
            </span>
        </div>
    </div>
</div>


    <!-- Card Statistik -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card text-white bg-danger shadow rounded-4">
                <div class="card-body text-center">
                    <h3 class="fw-bold">{{ $totalPasien ?? 0 }}</h3>
                    <p class="mb-0">Pasien pengguna resep</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-dark shadow rounded-4">
                <div class="card-body text-center">
                    <h3 class="fw-bold">{{ $obatTersedia ?? 0 }}</h3>
                    <p class="mb-0">Obat tersedia</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-primary shadow rounded-4">
                <div class="card-body text-center">
                    <h3 class="fw-bold">{{ $resepKeluar ?? 0 }}</h3>
                    <p class="mb-0">Resep dikeluarkan</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-secondary shadow rounded-4">
                <div class="card-body text-center">
                    <h3 class="fw-bold">{{ $laporanMasuk ?? 0 }}</h3>
                    <p class="mb-0">Laporan masuk</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
    <!-- Tabel Resep Terbaru -->
    <div class="col-md-8">
        <div class="card shadow rounded-4 h-100">
            <div class="card-header bg-light rounded-top-4">
                <strong>📋 Resep Terbaru</strong>
            </div>
            <div class="card-body p-0 rounded-bottom-4">
                <table class="table table-hover table-bordered m-0 rounded">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Pasien</th>
                            <th>Dokter</th>
                            <th>Obat</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @forelse($resepBaru as $index => $resep)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $resep->pasien->name ?? '-' }}</td>
                                <td>{{ $resep->dokter->name ?? '-' }}</td>
                                <td>{{ $resep->deskripsi }}</td>
                                <td>
                                    @if($resep->status == 'menunggu')
                                        <span class="badge bg-warning text-dark">Menunggu</span>
                                    @elseif($resep->status == 'diproses')
                                        <span class="badge bg-primary">Diproses</span>
                                    @else
                                        <span class="badge bg-success">Selesai</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Belum ada resep terbaru</td>
                            </tr>
                        @endforelse
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>

    <!-- Kotak Data User -->
    <div class="col-md-4">
        <div class="card bg-warning text-dark shadow rounded-4 h-100 d-flex align-items-center justify-content-center">
            <div class="card-body text-center">
                <h3 class="fw-bold">{{ $userCount ?? 0 }}</h3>
                <p class="mb-0">User aplikasi</p>
            </div>
        </div>
    </div>
</div>

                {{-- <tbody>
                    @forelse($resepBaru as $index => $resep)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $resep->pasien->name ?? '-' }}</td>
                            <td>{{ $resep->dokter->name ?? '-' }}</td>
                            <td>{{ $resep->deskripsi }}</td>
                            <td>
                                @if($resep->status == 'menunggu')
                                    <span class="badge bg-warning text-dark">Menunggu</span>
                                @elseif($resep->status == 'diproses')
                                    <span class="badge bg-primary">Diproses</span>
                                @else
                                    <span class="badge bg-success">Selesai</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada resep terbaru</td>
                        </tr>
                    @endforelse
                </tbody> --}}
            </table>
        </div>
    </div>

</div>
@endsection
