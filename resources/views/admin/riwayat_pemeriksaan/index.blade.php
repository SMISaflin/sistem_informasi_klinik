@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Riwayat Pemeriksaan</h1>
    <a href="{{ route('admin.riwayat_pemeriksaan.create') }}" class="btn btn-primary mb-3">Tambah Riwayat</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Pasien</th>
                <th>Dokter</th>
                <th>Tanggal</th>
                <th>Diagnosa</th>
                <th>Tindakan</th>
                <th>Obat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($riwayats as $riwayat)
            <tr>
                <td>{{ $riwayat->pasien->nama }}</td>
                <td>{{ $riwayat->dokter->nama }}</td>
                <td>{{ $riwayat->tanggal_periksa }}</td>
                <td>{{ $riwayat->diagnosa }}</td>
                <td>{{ $riwayat->tindakan }}</td>
                <td>{{ $riwayat->obat->nama_obat }}</td>
                <td>
                    <a href="{{ route('admin.riwayat_pemeriksaan.edit', $riwayat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.riwayat_pemeriksaan.destroy', $riwayat->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection