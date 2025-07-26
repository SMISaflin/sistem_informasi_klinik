@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Riwayat Pemeriksaan</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="GET" action="{{ route('admin.pasien.index') }}" class="mb-3">
        <div class="input-group">
            <input type="text" name="cari" class="form-control" placeholder="Cari nama pasien..." value="{{ request('cari') }}">
            <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
    </form>

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
                    <!-- Tombol Lihat -->
                    <button type="button" class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#modalLihat{{ $riwayat->id }}">
                        <i class="ti ti-eye"></i> Lihat
                    </button>

                    <!-- Form Hapus -->
                    <form action="{{ route('admin.riwayat_pemeriksaan.destroy', $riwayat->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>

            <!-- Modal Detail -->
            <div class="modal fade" id="modalLihat{{ $riwayat->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $riwayat->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel{{ $riwayat->id }}">Detail Riwayat Pemeriksaan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Pasien:</strong> {{ $riwayat->pasien->nama }}</p>
                            <p><strong>Dokter:</strong> {{ $riwayat->dokter->nama }}</p>
                            <p><strong>Tanggal Periksa:</strong> {{ $riwayat->tanggal_periksa }}</p>
                            <p><strong>Diagnosa:</strong> {{ $riwayat->diagnosa }}</p>
                            <p><strong>Tindakan:</strong> {{ $riwayat->tindakan }}</p>
                            <p><strong>Obat:</strong> {{ $riwayat->obat->nama_obat }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
