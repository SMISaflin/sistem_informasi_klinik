@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Jadwal Dokter</h1>
    <a href="{{ route('admin.jadwal_dokter.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Dokter</th>
                <th>Poli</th>
                <th>Hari</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwals as $jadwal)
            <tr>
                <td>{{ $jadwal->dokter->nama }}</td>
                <td>{{ $jadwal->poli->nama_poli }}</td>
                <td>{{ $jadwal->hari }}</td>
                <td>{{ $jadwal->jam_mulai }}</td>
                <td>{{ $jadwal->jam_selesai }}</td>
                <td>
                    <a href="{{ route('admin.jadwal_dokter.edit', $jadwal->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.jadwal_dokter.destroy', $jadwal->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus jadwal ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection