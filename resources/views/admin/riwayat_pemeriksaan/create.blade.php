@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tambah Riwayat Pemeriksaan</h1>
    <form action="{{ route('admin.riwayat_pemeriksaan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Pasien</label>
            <select name="pasien_id" class="form-control" required>
                @foreach($pasiens as $pasien)
                    <option value="{{ $pasien->id }}">{{ $pasien->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Dokter</label>
            <select name="dokter_id" class="form-control" required>
                @foreach($dokters as $dokter)
                    <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Tanggal Periksa</label>
            <input type="date" name="tanggal_periksa" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Diagnosa</label>
            <input type="text" name="diagnosa" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tindakan</label>
            <input type="text" name="tindakan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Obat</label>
            <select name="obat_id" class="form-control" required>
                @foreach($obats as $obat)
                    <option value="{{ $obat->id }}">{{ $obat->nama_obat }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.riwayat_pemeriksaan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
