@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Riwayat Pemeriksaan</h1>
    <form action="{{ route('admin.riwayat_pemeriksaan.update', $riwayat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Pasien</label>
            <select name="pasien_id" class="form-control" required>
                @foreach($pasiens as $pasien)
                    <option value="{{ $pasien->id }}" {{ $riwayat->pasien_id == $pasien->id ? 'selected' : '' }}>{{ $pasien->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Dokter</label>
            <select name="dokter_id" class="form-control" required>
                @foreach($dokters as $dokter)
                    <option value="{{ $dokter->id }}" {{ $riwayat->dokter_id == $dokter->id ? 'selected' : '' }}>{{ $dokter->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Tanggal Periksa</label>
            <input type="date" name="tanggal_periksa" value="{{ $riwayat->tanggal_periksa }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Diagnosa</label>
            <input type="text" name="diagnosa" value="{{ $riwayat->diagnosa }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tindakan</label>
            <input type="text" name="tindakan" value="{{ $riwayat->tindakan }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Obat</label>
            <select name="obat_id" class="form-control" required>
                @foreach($obats as $obat)
                    <option value="{{ $obat->id }}" {{ $riwayat->obat_id == $obat->id ? 'selected' : '' }}>{{ $obat->nama_obat }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.riwayat_pemeriksaan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection