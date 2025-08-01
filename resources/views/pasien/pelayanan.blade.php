@extends('layouts.pasien')
@section('content')
    <div class="text-center mb-4">
        <h2 class="fw-bold">Fasilitas & Pelayanan</h2>
        <p class="text-muted">Kami menyediakan fasilitas dan pelayanan terbaik untuk kenyamanan pasien</p>
    </div>

    <div class="row g-4">
        {{-- Fasilitas 1 --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="/images/icons/Home_slide_klinik.png" class="card-img-top" alt="Ruang Tunggu Nyaman">
                <div class="card-body">
                    <h5 class="card-title">Ruang Tunggu Nyaman</h5>
                    <p class="card-text">Ruang tunggu ber-AC dengan kursi nyaman, televisi, dan koneksi Wi-Fi gratis.</p>
                </div>
            </div>
        </div>

        {{-- Fasilitas 2 --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="/images/icons/medical-checkup.png" class="card-img-top" alt="Poliklinik Lengkap">
                <div class="card-body">
                    <h5 class="card-title">Poliklinik Lengkap</h5>
                    <p class="card-text">Pelayanan umum, gigi, anak, serta layanan laboratorium dan farmasi dalam satu tempat.</p>
                </div>
            </div>
        </div>

        {{-- Fasilitas 3 --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="/images/icons/ambulans.png" class="card-img-top" alt="Layanan Ambulans">
                <div class="card-body">
                    <h5 class="card-title">Layanan Ambulans</h5>
                    <p class="card-text">Ambulans siap siaga untuk rujukan atau keadaan darurat 24 jam.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h4>Pelayanan Tambahan</h4>
        <ul>
            <li>Pemeriksaan rutin & konsultasi dokter</li>
            <li>Layanan vaksinasi & imunisasi anak</li>
            <li>Klinik ibu hamil & cek tekanan darah</li>
            <li>Rekam medis digital & pendaftaran online</li>
        </ul>
    </div>
@endsection