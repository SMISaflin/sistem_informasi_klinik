@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Poli</h1>
    <form action="{{ route('admin.poli.update', $poli->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Poli</label>
            <input type="text" name="nama_poli" value="{{ $poli->nama_poli }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" required>{{ $poli->keterangan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.poli.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection