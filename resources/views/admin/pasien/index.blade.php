@extends('layouts.admin')

@section('content')
<div class="container mt-4">
  <h2 class="mb-4">Daftar Pasien</h2>

  <!-- Tombol untuk buka modal -->
  <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambahPasien">
    + Tambah Pasien
  </button>

  <!-- Table -->
  <table class="table table-bordered table-striped">
    <thead class="table-dark text-center">
      <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>JK</th>
        <th>Tanggal Lahir</th>
        <th>No HP</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pasiens as $index => $pasien)
      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $pasien->nik }}</td>
        <td>{{ $pasien->nama_lengkap }}</td>
        <td>{{ $pasien->jenis_kelamin }}</td>
        <td>{{ $pasien->tanggal_lahir }}</td>
        <td>{{ $pasien->no_hp }}</td>
        <td>
              <!-- Tombol Lihat -->
  <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalLihatPasien{{ $pasien->id }}">
    <i class="bi bi-eye"></i>
  </button>
          <a href="{{ route('admin.pasien.edit', $pasien->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
          <form action="{{ route('admin.pasien.destroy', $pasien->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
   @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<!-- MODAL TAMBAH PASIEN -->
<div class="modal fade" id="modalTambahPasien" tabindex="-1" aria-labelledby="modalTambahPasienLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="{{ route('admin.pasien.store') }}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="modalTambahPasienLabel">Form Tambah Pasien</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <div class="row mb-3">
            <div class="col-md-6">
              <label>NIK</label>
              <input type="text" name="nik" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label>Nama Lengkap</label>
              <input type="text" name="nama_lengkap" class="form-control" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-6">
              <label>Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" required>
                <option value="">-- Pilih --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="col-md-6">
              <label>Tempat Lahir</label>
              <input type="text" name="tempat_lahir" class="form-control" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-6">
              <label>Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label>No. HP</label>
              <input type="text" name="no_hp" class="form-control" required>
            </div>
          </div>

          <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" rows="2" required></textarea>
          </div>

          <div class="row mb-3">
            <div class="col-md-4">
              <label>Pekerjaan</label>
              <input type="text" name="pekerjaan" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Status Perkawinan</label>
              <select name="status_perkawinan" class="form-control">
                <option value="">-- Pilih --</option>
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin</option>
                <option value="Duda">Duda</option>
                <option value="Janda">Janda</option>
              </select>
            </div>
            <div class="col-md-4">
              <label>Golongan Darah</label>
              <select name="gol_darah" class="form-control">
                <option value="">-- Pilih --</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label>Agama</label>
            <input type="text" name="agama" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@foreach($pasiens as $pasien)
<!-- MODAL LIHAT PASIEN -->
<div class="modal fade" id="modalLihatPasien{{ $pasien->id }}" tabindex="-1" aria-labelledby="modalLihatPasienLabel{{ $pasien->id }}" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLihatPasienLabel{{ $pasien->id }}">Detail Pasien</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <div class="row mb-2">
          <div class="col-md-6"><strong>NIK:</strong> {{ $pasien->nik }}</div>
          <div class="col-md-6"><strong>Nama Lengkap:</strong> {{ $pasien->nama_lengkap }}</div>
        </div>
        <div class="row mb-2">
          <div class="col-md-6"><strong>Jenis Kelamin:</strong> {{ $pasien->jenis_kelamin }}</div>
          <div class="col-md-6"><strong>Tempat Lahir:</strong> {{ $pasien->tempat_lahir }}</div>
        </div>
        <div class="row mb-2">
          <div class="col-md-6"><strong>Tanggal Lahir:</strong> {{ $pasien->tanggal_lahir }}</div>
          <div class="col-md-6"><strong>No. HP:</strong> {{ $pasien->no_hp }}</div>
        </div>
        <div class="mb-2"><strong>Alamat:</strong> {{ $pasien->alamat }}</div>
        <div class="row mb-2">
          <div class="col-md-4"><strong>Pekerjaan:</strong> {{ $pasien->pekerjaan }}</div>
          <div class="col-md-4"><strong>Status Perkawinan:</strong> {{ $pasien->status_perkawinan }}</div>
          <div class="col-md-4"><strong>Gol. Darah:</strong> {{ $pasien->gol_darah }}</div>
        </div>
        <div class="mb-2"><strong>Agama:</strong> {{ $pasien->agama }}</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
@endforeach
