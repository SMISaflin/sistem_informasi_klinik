@extends('layouts.apoteker')

@section('title', 'Data Obat')

@section('content')
<div class="container mt-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold"><i class="bi bi-capsule me-2 text-success"></i>Data Obat</h3>
            <p class="text-muted mb-0">Daftar semua obat yang tersedia di klinik.</p>
        </div>
        <a href="{{ route('apoteker.obat.create') }}" class="btn btn-primary rounded-pill shadow-sm">
            <i class="bi bi-plus-circle me-1"></i> Tambah Obat
        </a>
    </div>

    <!-- Table -->
    <div class="card shadow-lg rounded-4 border-0">
        <div class="card-body p-0">
            <table class="table table-hover table-bordered m-0 rounded">
                <thead class="table-success text-center">
                    <tr>
                        <th>Nama Obat</th>
                        <th>Jenis Obat</th>
                        <th>Stok</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($obat as $obat)
                        <tr class="align-middle text-center">
                            <td>{{ $obat->nama_obat }}</td>
                            <td>{{ $obat->jenis_obat }}</td>
                            <td>{{ $obat->stok }}</td>
                            <td>{{ $obat->keterangan }}</td>
                            <td>
                                <a href="{{ route('apoteker.obat.edit', $obat->id) }}" class="btn btn-sm btn-warning rounded-pill me-1">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('apoteker.obat.destroy', $obat->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger rounded-pill" onclick="return confirm('Yakin ingin menghapus?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">Tidak ada data obat tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
