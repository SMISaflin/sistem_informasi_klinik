@extends('layouts.dokter') {{-- Ganti jika kamu punya layout khusus dokter --}}
@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Pasien</h1>

    <form method="GET" action="{{ route('dokter.pasien.index') }}" class="mb-3">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Cari nama pasien..." value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit">Cari</button>
    </div>
</form>


    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Pekerjaan</th>
                <th>Status Perkawinan</th>
                <th>Gol. Darah</th>
                <th>Agama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasiens as $pasien)
                <tr>
                    <td>{{ $pasien->nik }}</td>
                    <td>{{ $pasien->nama_lengkap }}</td>
                    <td>{{ $pasien->jenis_kelamin }}</td>
                    <td>{{ $pasien->tempat_lahir }}, {{ \Carbon\Carbon::parse($pasien->tanggal_lahir)->format('d-m-Y') }}</td>
                    <td>{{ $pasien->alamat }}</td>
                    <td>{{ $pasien->no_hp }}</td>
                    <td>{{ $pasien->pekerjaan ?? '-' }}</td>
                    <td>{{ $pasien->status_perkawinan }}</td>
                    <td>{{ $pasien->gol_darah ?? '-' }}</td>
                    <td>{{ $pasien->agama }}</td>
                    <td>
    <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalResep{{ $pasien->id }}">
        Beri Resep
    </button>
</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($pasiens as $pasien)
<!-- Modal Resep -->
<div class="modal fade" id="modalResep{{ $pasien->id }}" tabindex="-1" aria-labelledby="modalResepLabel{{ $pasien->id }}" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{ route('dokter.resep.store') }}" method="POST">
        @csrf
        <input type="hidden" name="pasien_id" value="{{ $pasien->id }}">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalResepLabel{{ $pasien->id }}">Resep untuk {{ $pasien->nama_lengkap }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="diagnosa" class="form-label">Diagnosa</label>
                    <textarea name="diagnosa" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="resep" class="form-label">Resep</label>
                    <textarea name="resep" class="form-control" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan Resep</button>
            </div>
        </div>
    </form>
  </div>
</div>
@endforeach

</div>
@endsection
