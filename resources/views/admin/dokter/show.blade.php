@extends('layouts.admin')

@section('title', 'Detail Dokter')

@section('content')
<div class="container mt-4">
    <h3>Detail Dokter</h3>
    <a href="{{ route('admin.dokter.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <div class="card">
        <div class="card-body">
            <img src="{{ asset($dokter->gambar) }}" width="100" class="mb-3">
            <p><strong>Nama:</strong> {{ $dokter->nama }}</p>
            <p><strong>Spesialis:</strong> {{ $dokter->spesialis }}</p>
            <p><strong>No HP:</strong> {{ $dokter->nohp }}</p>
        </div>
    </div>
</div>
@endsection
