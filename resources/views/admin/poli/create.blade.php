@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tambah Poli</h1>
    <form action="{{ route('admin.poli.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Poli</label>
            <input type="text" name="nama_poli" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.poli.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection