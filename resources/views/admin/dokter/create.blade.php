@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tambah Dokter</h1>
    <form action="{{ route('admin.dokter.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Spesialis</label>
            <input type="text" name="spesialis" class="form-control" required>
        </div>
        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control-file" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.dokter.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
