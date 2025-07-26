@extends('layouts.apoteker')

@section('title', 'Edit Obat')

@section('content')
<div class="container my-4">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-warning text-dark rounded-top-4 d-flex align-items-center">
            <i class="bi bi-pencil-square fs-4 me-2"></i>
            <h5 class="mb-0 fw-semibold">Edit Data Obat</h5>
        </div>

        <div class="card-body bg-light rounded-bottom-4">
            <form action="{{ route('apoteker.obat.update', $obat->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <!-- Nama Obat -->
                    <div class="col-md-6">
                        <label for="nama_obat" class="form-label fw-semibold">Nama Obat</label>
                        <input type="text" name="nama_obat" id="nama_obat" value="{{ $obat->nama_obat }}"
                            class="form-control rounded-3 shadow-sm" placeholder="Masukkan nama obat" required>
                    </div>

                    <!-- Jenis Obat -->
                    <div class="col-md-6">
                        <label for="jenis_obat" class="form-label fw-semibold">Jenis Obat</label>
                        <input type="text" name="jenis_obat" id="jenis_obat" value="{{ $obat->jenis_obat }}"
                            class="form-control rounded-3 shadow-sm" placeholder="Masukkan jenis obat" required>
                    </div>

                    <!-- Stok -->
                    <div class="col-md-6">
                        <label for="stok" class="form-label fw-semibold">Stok</label>
                        <input type="number" name="stok" id="stok" value="{{ $obat->stok }}"
                            class="form-control rounded-3 shadow-sm" placeholder="Jumlah stok" required>
                    </div>

                    <!-- Keterangan -->
                    <div class="col-md-12">
                        <label for="keterangan" class="form-label fw-semibold">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" rows="3"
                            class="form-control rounded-3 shadow-sm"
                            placeholder="Masukkan keterangan tambahan">{{ $obat->keterangan }}</textarea>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('apoteker.obat.index') }}" class="btn btn-outline-secondary rounded-3 me-2">
                        <i class="bi bi-arrow-left-circle me-1"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-success rounded-3">
                        <i class="bi bi-check2-square me-1"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
