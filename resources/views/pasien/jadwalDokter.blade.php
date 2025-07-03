@extends('layouts.pasien') {{-- Sesuaikan dengan layout milik pasien --}}
@section('title', 'Jadwal Dokter')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Jadwal Praktek Dokter</h2>
  @include('layouts.partials.dokter', ['dokters' => $dokters])
   
  <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nama Dokter</th>
                <th>Poli</th>
                <th>Senin</th>
                <th>Selasa</th>
                <th>Rabu</th>
                <th>Kamis</th>
                <th>Jum'at</th>
                <th>Sabtu</th>
            </tr>
        </thead>
       <tbody>
    @forelse ($jadwals as $jadwal)
        <tr>
            <td>{{ $jadwal->dokter->nama }}</td>
            <td>{{ $jadwal->poli->nama_poli }}</td>
            <td>{{ $jadwal->hari == 'senin' ? $jadwal->jam_mulai . ' - ' . $jadwal->jam_selesai : '-' }}</td>
            <td>{{ $jadwal->hari == 'selasa' ? $jadwal->jam_mulai . ' - ' . $jadwal->jam_selesai : '-' }}</td>
            <td>{{ $jadwal->hari == 'rabu' ? $jadwal->jam_mulai . ' - ' . $jadwal->jam_selesai : '-' }}</td>
            <td>{{ $jadwal->hari == 'kamis' ? $jadwal->jam_mulai . ' - ' . $jadwal->jam_selesai : '-' }}</td>
            <td>{{ $jadwal->hari == "jum'at" ? $jadwal->jam_mulai . ' - ' . $jadwal->jam_selesai : '-' }}</td>
            <td>{{ $jadwal->hari == 'sabtu' ? $jadwal->jam_mulai . ' - ' . $jadwal->jam_selesai : '-' }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="8" class="text-center">Tidak ada jadwal tersedia</td>
        </tr>
    @endforelse
</tbody>

    </table>

</div>
@endsection
