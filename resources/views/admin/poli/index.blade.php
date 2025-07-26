@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Data Poli</h1>
    <a href="{{ route('admin.poli.create') }}" class="btn btn-primary mb-3">Tambah Poli</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th class="" style="width: 200px">Nama Poli</th>
                <th>Keterangan</th>
                <th class="" style="width: 90px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($polis as $poli)
            <tr>
                <td>{{ $poli->nama_poli }}</td>
                <td>{{ $poli->keterangan }}</td>
                <td>
                    <a href="{{ route('admin.poli.edit', $poli->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
                    <form action="{{ route('admin.poli.destroy', $poli->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus poli ini?')"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection