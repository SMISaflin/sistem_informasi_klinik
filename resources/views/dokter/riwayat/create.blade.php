@extends('layouts.dokter')

@section('content')
<h4>Tambah Riwayat Pemeriksaan</h4>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('dokter.riwayat.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Pasien</label>
        <select name="pasien_id" class="form-control" required>
            <option value="">Pilih Pasien</option>
            @foreach($pasiens as $pasien)
            <option value="{{ $pasien->id }}">{{ $pasien->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Tanggal Periksa</label>
        <input type="date" name="tanggal_periksa" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Diagnosa</label>
        <textarea name="diagnosa" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Tindakan</label>
        <textarea name="tindakan" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Obat</label>
        <select name="obat_id" class="form-control">
            <option value="">-</option>
            @foreach($obats as $obat)
            <option value="{{ $obat->id }}">{{ $obat->nama }}</option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-success">Simpan</button>
</form>
@endsection
