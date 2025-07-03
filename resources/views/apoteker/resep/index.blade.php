@extends('layouts.apoteker')

@section('title', 'Daftar Resep Menunggu')

@section('content')
<div class="container">
    <h1 class="mb-4">Resep Menunggu</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Resep</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($resep as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->pasien->name ?? 'Pasien' }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        @if($item->status == 'menunggu')
                            <span class="badge bg-warning text-dark">Menunggu</span>
                        @elseif($item->status == 'diproses')
                            <span class="badge bg-primary">Diproses</span>
                        @elseif($item->status == 'selesai')
                            <span class="badge bg-success">Selesai</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('apoteker.resep.show', $item->id) }}" class="btn btn-sm btn-info">Lihat</a>
                        @if($item->status == 'menunggu')
                            <form action="{{ route('apoteker.resep.proses', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button class="btn btn-sm btn-success" onclick="return confirm('Proses resep ini?')">Proses</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada resep menunggu.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
