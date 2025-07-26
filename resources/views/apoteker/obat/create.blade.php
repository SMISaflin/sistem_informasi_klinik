@extends('layouts.apoteker')

@section('title', 'Tambah Obat')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg rounded-4 border-0">
        <div class="card-header bg-success text-white rounded-top-4">
            <h4 class="mb-0"><i class=" me-2"></i> Tambah Data Obat</h4>
        </div>
        <div class="card-body bg-light rounded-bottom-4">
            <form action="{{ route('apoteker.obat.store') }}" method="POST">
                @csrf

                <!-- Nama Obat -->
                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold">Nama Obat</label>
                    <input type="text" name="nama" id="nama" class="form-control rounded-3 shadow-sm" placeholder="Masukkan nama obat" required>
                </div>

                <!-- Jenis Obat -->
                <div class="mb-3">
                    <label for="jenis" class="form-label fw-semibold">Jenis Obat</label>
                    <input type="text" name="jenis" id="jenis" class="form-control rounded-3 shadow-sm" placeholder="Masukkan jenis obat" required>
                </div>

                <!-- Stok -->
                <div class="mb-3">
                    <label for="stok" class="form-label fw-semibold">Stok</label>
                    <input type="number" name="stok" id="stok" class="form-control rounded-3 shadow-sm" placeholder="Masukkan jumlah stok" required>
                </div>

                <!-- Keterangan -->
                <div class="mb-3">
                    <label for="keterangan" class="form-label fw-semibold">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" rows="3" class="form-control rounded-3 shadow-sm" placeholder="Tulis keterangan tambahan..."></textarea>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('apoteker.obat.index') }}" class="btn btn-secondary rounded-3 me-2">
                        <i class="bi bi-arrow-left-circle me-1"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary rounded-3">
                        <i class="bi bi-save me-1"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
