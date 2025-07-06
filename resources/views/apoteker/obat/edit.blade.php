@extends('layouts.apoteker')

@section('content')
<div class="container">
    <h1>Edit Obat</h1>
    <form action="{{ route('apoteker.obat.update', $obat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Obat</label>
            <input type="text" name="nama_obat" value="{{ $obat->nama_obat }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jenis Obat</label>
            <input type="text" name="jenis_obat" value="{{ $obat->jenis_obat }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" value="{{ $obat->stok }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" required>{{ $obat->keterangan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('apoteker.obat.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection