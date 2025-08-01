@extends('layouts.pasienpublic')

@section('content')
    <div class="vh-100 d-flex justify-content-center align-items-center text-center" >
    
    <div>
        <h2 class="fw-bold display-4">Selamat Datang di Klinik Umum</h2>
        <p class="lead fw-semibold">Pelayanan kesehatan terpercaya untuk Anda dan keluarga</p>
        @auth
<a href="#" class="btn btn-success mt-4 px-4 py-2 fs-5" data-bs-toggle="modal" data-bs-target="#modalTambahPasien">
    <i class="bi bi-person-plus-fill me-2"></i> Daftar Pasien Sekarang
</a>
@endauth
    </div>

</div>


 <div class="container">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-success">Layanan Kami</h1>
        <p class="text-muted">Kami menyediakan berbagai layanan kesehatan terbaik untuk Anda dan keluarga</p>
    </div>

    <div class="row g-4">
        <!-- Layanan 1: Pelayanan Umum -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-heart-pulse-fill text-success fs-1 mb-3"></i>
                    <h5 class="card-title">Pelayanan Umum</h5>
                    <p class="card-text">Pemeriksaan kesehatan dasar, konsultasi medis, dan tindakan ringan.</p>
                </div>
            </div>
        </div>

        <!-- Layanan 2: Klinik Gigi -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-tooth-fill text-success fs-1 mb-3"></i>
                    <h5 class="card-title">Klinik Gigi</h5>
                    <p class="card-text">Perawatan gigi, pembersihan karang, tambal, cabut, dan konsultasi gigi anak.</p>
                </div>
            </div>
        </div>

        <!-- Layanan 3: Apotek & Obat -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-capsule-pill text-success fs-1 mb-3"></i>
                    <h5 class="card-title">Apotek & Obat</h5>
                    <p class="card-text">Layanan pembelian obat sesuai resep dokter, aman dan terpercaya.</p>
                </div>
            </div>
        </div>

        <!-- Layanan 4: Dokter Umum -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-person-badge-fill text-success fs-1 mb-3"></i>
                    <h5 class="card-title">Dokter Umum</h5>
                    <p class="card-text">Konsultasi Kesehatan, Pemeriksaan Umum, Khitan/Sirkumsisi, Operasi Kecil/Bedah Minor</p>
                </div>
            </div>
        </div>

        <!-- Layanan 5: Kebidanan -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-gender-female text-success fs-1 mb-3"></i>
                    <h5 class="card-title">Kebidanan</h5>
                    <p class="card-text">Pemeriksaan kehamilan, konsultasi ibu hamil, serta layanan KB dan imunisasi.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h3 class="text-center fw-bold mb-4">Layanan Kesehatan Lainnya</h3>

    <div class="row text-center g-4">
        <!-- Layanan 1 -->
        <div class="col-md-4 col-sm-6">
            <img src="/images/icons/medical-checkup.png" alt="Medical Check Up" width="80" class="mb-2">
            <p class="fw-semibold">Medical Check Up<br>Kesehatan dan Kerja</p>
        </div>

        <!-- Layanan 2 -->
        <div class="col-md-4 col-sm-6">
            <img src="/images/icons/laboratorium.png" alt="Laboratorium" width="80" class="mb-2">
            <p class="fw-semibold">Laboratorium Klinik</p>
        </div>

        <!-- Layanan 3 -->
        <div class="col-md-4 col-sm-6">
            <img src="/images/icons/ekg.png" alt="EKG" width="80" class="mb-2">
            <p class="fw-semibold">EKG</p>
        </div>

        <!-- Layanan 4 -->
        <div class="col-md-4 col-sm-6">
            <img src="/images/icons/usg.png" alt="USG" width="80" class="mb-2">
            <p class="fw-semibold">USG</p>
        </div>

        <!-- Layanan 5 -->
        <div class="col-md-4 col-sm-6">
            <img src="/images/icons/kerjasama.png" alt="Kerja Sama" width="80" class="mb-2">
            <p class="fw-semibold">Kerja sama<br>Kegiatan Kesehatan</p>
        </div>

        <!-- Layanan 6 -->
        <div class="col-md-4 col-sm-6">
            <img src="/images/icons/surat-sehat.png" alt="Surat Sehat" width="80" class="mb-2">
            <p class="fw-semibold">Surat Keterangan<br>Sehat dan Buta Warna</p>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row align-items-center g-5">
        <!-- Gambar Dokter -->
        <div class="col-lg-6">
            <img src="/images/tentang-kami-ilustrasi.png" alt="Dokter & Perawat" class="img-fluid">
        </div>

        <!-- Konten Teks -->
        <div class="col-lg-6">
            <span class="badge bg-light text-primary px-3 py-2 mb-2 fw-semibold">TENTANG KAMI</span>
            <h2 class="fw-bold text-success">Sahabat Keluarga Sehat</h2>
            <p class="text-muted">
                Klinik Cipanas berintegrasi dan berfokus dalam memberikan pelayanan kesehatan, pengobatan dan pencegahan penyakit.
                Untuk mencapai kepedulian di atas dan juga pengembangannya, maka Klinik Cipanas harus terus meningkatkan kualitas pelayanan
                kesehatan yang baik dan akan terus bertransformasi dalam mengikuti teknologi kesehatan.
            </p>
            <ul class="list-unstyled">
                <li class="d-flex align-items-start mb-2">
                    <i class="bi bi-chevron-right text-success me-2 fs-5"></i>
                    <span>Memberikan pelayanan kesehatan yang komprehensif, terjangkau dan berdasar ilmu pengetahuan terkini.</span>
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="bi bi-chevron-right text-success me-2 fs-5"></i>
                    <span>Menyediakan pelayanan penunjang kesehatan yang lengkap, terjangkau dan terstandar.</span>
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="bi bi-chevron-right text-success me-2 fs-5"></i>
                    <span>Membantu pemerintah dalam meningkatkan derajat kesehatan masyarakat melalui promosi hidup sehat.</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-success">Dokter di Klinik Cipanas</h2>
        <p class="text-muted">Menyediakan pelayanan penunjang kesehatan yang lengkap, terjangkau dan terstandar.</p>
    </div>
      @include('layouts.partials.dokter', ['dokters' => $dokters])
</div>

        {{-- Kartu Hubungi Kami --}}
        <div class="col-md-12 mt-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Butuh Bantuan?</h5>
                    <p class="card-text">Hubungi kami untuk pertanyaan atau informasi lebih lanjut.</p>
                    <a href="/kontak" class="btn btn-success">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- MODAL TAMBAH PASIEN -->
<div class="modal fade" id="modalTambahPasien" tabindex="-1" aria-labelledby="modalTambahPasienLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      @if (session('success'))
  <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
      <form action="{{ route('pasien.regpasien.store') }}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="modalTambahPasienLabel">Form Tambah Pasien</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <div class="row mb-3">
            <div class="col-md-6">
              <label>NIK</label>
              <input type="number" name="nik" class="form-control" required>
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
              <input type="number" name="no_hp" class="form-control" required>
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

