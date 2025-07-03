@extends('layouts.pasien') {{-- Sesuaikan dengan layout utama --}}
@section('title', 'Profil Pasien')

@section('content')
<div class="container pt-5 mt-5 mb-5">

    {{-- Header --}}
    <div class="text-center mb-5">
        <h2 class="fw-bold text-success">Tentang Kami</h2>
        <p class="text-muted">Profil Singkat Klinik Umum</p>
    </div>

    {{-- Visi Misi + Gambar --}}
    <div class="row align-items-center g-5 mb-5">
        <div class="col-md-6">
            <h4 class="text-success">Visi</h4>
            <p class="text-muted">Menjadi klinik terpercaya dan terdepan dalam memberikan pelayanan kesehatan yang profesional, cepat, dan ramah kepada seluruh lapisan masyarakat.</p>

            <h4 class="text-success">Misi</h4>
            <ul class="text-muted">
                <li>Menyediakan layanan kesehatan umum dan spesialis dengan standar tinggi.</li>
                <li>Mengutamakan kenyamanan dan keselamatan pasien.</li>
                <li>Mengembangkan tenaga medis yang kompeten dan beretika.</li>
            </ul>
        </div>

        <div class="col-md-6 text-center">
            <img src="https://via.placeholder.com/500x300?text=Foto+Klinik" class="img-fluid rounded shadow-sm" alt="Foto Klinik">
        </div>
    </div>

    {{-- Sejarah Klinik --}}
    <div class="bg-light p-4 rounded shadow-sm">
        <h4 class="text-success">Sejarah Klinik</h4>
        <p class="text-muted">
            Klinik Umum berdiri sejak tahun 2010 dengan komitmen untuk memberikan layanan kesehatan yang mudah dijangkau dan berkualitas.
            Dengan tenaga medis profesional dan fasilitas yang terus ditingkatkan, kami hadir sebagai mitra kesehatan keluarga Anda.
        </p>
    </div>

</div>
@endsection
