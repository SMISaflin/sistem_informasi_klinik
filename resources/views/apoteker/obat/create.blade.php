@extends('layouts.apoteker')

@section('content')
<div class="container">
    <h1>Tambah Obat</h1>
    <form action="{{ route('apoteker.obat.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jenis Obat</label>
            <input type="text" name="jenis_obat" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('apoteker.obat.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection