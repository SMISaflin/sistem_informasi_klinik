@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Data Dokter</h1>
    <a href="{{ route('admin.dokter.create') }}" class="btn btn-primary mb-3">Tambah Dokter</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th class="" style="width: 120px">Gambar</th>
                <th>Nama</th>
                <th>Spesialis</th>
                <th>No HP</th>
                <th class="" style="width: 120px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dokters as $dokter)
            <tr class="text-center">
                <td>
                    @if($dokter->gambar)
                        <img src="{{ asset($dokter->gambar) }}" alt="Gambar Dokter" width="80" height="80" style="object-fit: cover; border-radius: 5px;">
                    @else
                        <span class="text-muted">Tidak ada</span>
                    @endif
                </td>
                <td>{{ $dokter->nama }}</td>
                <td>{{ $dokter->spesialis }}</td>
                <td>{{ $dokter->no_hp }}</td>
                <td class="text-center">
                  <div class="d-flex justify-content-center gap-1">
                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalLihat{{ $dokter->id }}"><i class="bi bi-eye"></i></button>
                    <a href="{{ route('admin.dokter.edit', $dokter->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
                    <form action="{{ route('admin.dokter.destroy', $dokter->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus dokter ini?')"><i class="bi bi-trash"></i></button>
                    </form>
                  </div>
                </td>
            </tr>

            <!-- Modal Detail Dokter (masing-masing dokter) -->
            <div class="modal fade" id="modalLihat{{ $dokter->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $dokter->id }}" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="modalLabel{{ $dokter->id }}">Detail Dokter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                  </div>
                  <div class="modal-body">
                    <div class="text-center mb-3">
                      @if($dokter->gambar)
                          <img src="{{ asset($dokter->gambar) }}" class="img-thumbnail" width="120">
                      @else
                          <p class="text-muted">Tidak ada gambar</p>
                      @endif
                    </div>
                    <p><strong>Nama:</strong> {{ $dokter->nama }}</p>
                    <p><strong>Spesialis:</strong> {{ $dokter->spesialis }}</p>
                    <p><strong>No HP:</strong> {{ $dokter->no_hp }}</p>
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
