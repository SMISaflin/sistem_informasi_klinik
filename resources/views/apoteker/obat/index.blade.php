@extends('layouts.apoteker')

@section('content')
<div class="container">
    <h1>Data Obat</h1>
    <a href="{{ route('apoteker.obat.create') }}" class="btn btn-primary mb-3">Tambah Obat</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Obat</th>
                <th>Jenis Obat</th>
                <th>Stok</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($obat as $obat)
            <tr>
                <td>{{ $obat->nama_obat }}</td>
                <td>{{ $obat->jenis_obat }}</td>
                <td>{{ $obat->stok }}</td>
                <td>{{ $obat->keterangan }}</td>
                <td>
                    <a href="{{ route('apoteker.obat.edit', $obat->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
                    <form action="{{ route('apoteker.obat.destroy', $obat->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus obat ini?')"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection