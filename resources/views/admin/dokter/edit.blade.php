@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Dokter</h1>
    <form action="{{ route('admin.dokter.update', $dokter->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $dokter->nama }}" required>
        </div>
        <div class="form-group">
            <label>Spesialis</label>
            <input type="text" name="spesialis" class="form-control" value="{{ $dokter->spesialis }}" required>
        </div>
        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" value="{{ $dokter->no_hp }}" required>
        </div>
        <div class="form-group">
            <label>Gambar Saat Ini:</label><br>
            @if ($dokter->gambar)
                <img src="{{ asset($dokter->gambar) }}" alt="Gambar Dokter" width="120">
            @else
                Tidak ada gambar
            @endif
        </div>
        <div class="form-group">
            <label>Ganti Gambar (opsional)</label>
            <input type="file" name="gambar" class="form-control-file" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.dokter.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
