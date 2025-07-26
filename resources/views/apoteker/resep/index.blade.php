@extends('layouts.apoteker')

@section('title', 'Resep Obat')

@section('content')
<div class="container mt-4">

    <!-- Header -->
    <div class="mb-4">
        <h3 class="fw-bold"><i class="bi bi-file-medical me-2 text-success"></i>Resep Menunggu</h3>
        <p class="text-muted">Daftar resep yang menunggu konfirmasi dari apoteker.</p>
    </div>

    <!-- Tabel Resep -->
    <div class="card shadow-lg rounded-4 border-0">
        <div class="card-body p-0">
            <table class="table table-hover table-bordered m-0 rounded">
                <thead class="table-success text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>Resep</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($reseps as $item)
                        <tr class="align-middle text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->pasien->name ?? '-' }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                @if($item->status == 'menunggu')
                                    <span class="badge bg-warning text-dark">Menunggu</span>
                                @elseif($item->status == 'diproses')
                                    <span class="badge bg-primary">Diproses</span>
                                @elseif($item->status == 'selesai')
                                    <span class="badge bg-success">Selesai</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('apoteker.resep.show', $item->id) }}" class="btn btn-sm btn-info rounded-pill">
                                    <i class="bi bi-eye-fill"></i> Lihat
                                </a>
                                @if($item->status == 'menunggu')
                                    <form action="{{ route('apoteker.resep.proses', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" onclick="return confirm('Proses resep ini?')" class="btn btn-sm btn-success rounded-pill">
                                            <i class="bi bi-check-circle"></i> Proses
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">Tidak ada resep menunggu.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
