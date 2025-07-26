@extends('layouts.dokter')

@section('content')
<h4>Riwayat Pemeriksaan</h4>
<a href="{{ route('dokter.riwayat.create') }}" class="btn btn-primary mb-2">Tambah Riwayat</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Pasien</th>
            <th>Tanggal Periksa</th>
            <th>Diagnosa</th>
            <th>Tindakan</th>
            <th>Obat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($riwayats as $riwayat)
        <tr>
            <td>{{ $riwayat->pasien->nama ?? '-' }}</td>
            <td>{{ $riwayat->tanggal_periksa }}</td>
            <td>{{ $riwayat->diagnosa }}</td>
            <td>{{ $riwayat->tindakan }}</td>
            <td>{{ $riwayat->obat->nama ?? '-' }}</td>
            <td>
                <a href="{{ route('dokter.riwayat.edit', $riwayat->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('dokter.riwayat.destroy', $riwayat->id) }}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
