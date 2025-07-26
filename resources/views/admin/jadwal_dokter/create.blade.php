@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tambah Jadwal Dokter</h1>
    <form action="{{ route('admin.jadwal_dokter.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Dokter</label>
            <select name="dokter_id" class="form-control" required>
                @foreach($dokters as $dokter)
                    <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Poli</label>
            <select name="poli_id" class="form-control" required>
                @foreach($polis as $poli)
                    <option value="{{ $poli->id }}">{{ $poli->nama_poli }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jam Mulai</label>
            <input type="time" name="jam_mulai" class="form-control" required>
        </div>
        <div class="form-group mb-2">
            <label>Jam Selesai</label>
            <input type="time" name="jam_selesai" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.jadwal_dokter.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection