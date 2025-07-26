@extends('layouts.dokter')

@section('content')
<div class="container">
    <h2 class="mb-4">Jadwal Praktek</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Hari</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                <th>Poli</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($jadwals as $jadwal)
                <tr>
                    <td>{{ $jadwal->hari }}</td>
                    <td>{{ \Carbon\Carbon::parse($jadwal->jam_mulai)->format('H:i') }}</td>
                    <td>{{ \Carbon\Carbon::parse($jadwal->jam_selesai)->format('H:i') }}</td>
                    <td>{{ $jadwal->poli->nama ?? '-' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada jadwal tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
