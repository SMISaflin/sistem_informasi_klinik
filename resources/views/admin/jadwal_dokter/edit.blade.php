@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Jadwal Dokter</h1>
    <form action="{{ route('admin.jadwal_dokter.update', $jadwal->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Dokter</label>
            <select name="dokter_id" class="form-control" required>
                @foreach($dokters as $dokter)
                    <option value="{{ $dokter->id }}" {{ $jadwal->dokter_id == $dokter->id ? 'selected' : '' }}>{{ $dokter->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Poli</label>
            <select name="poli_id" class="form-control" required>
                @foreach($polis as $poli)
                    <option value="{{ $poli->id }}" {{ $jadwal->poli_id == $poli->id ? 'selected' : '' }}>{{ $poli->nama_poli }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Hari</label>
            <input type="text" name="hari" value="{{ $jadwal->hari }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jam Mulai</label>
            <input type="time" name="jam_mulai" value="{{ $jadwal->jam_mulai }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jam Selesai</label>
            <input type="time" name="jam_selesai" value="{{ $jadwal->jam_selesai }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.jadwal_dokter.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection