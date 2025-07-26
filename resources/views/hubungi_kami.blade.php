@extends('layouts.pasienpublic')
@section('content')
    <div class="text-center mb-4">
        <h2 class="fw-bold">Hubungi Kami</h2>
        <p class="text-muted">Silakan hubungi kami untuk informasi lebih lanjut atau konsultasi</p>
    </div>

    <div class="row g-4">
        {{-- Informasi Kontak --}}
        <div class="col-md-6">
            <h5 class="fw-semibold">Informasi Kontak</h5>
            <ul class="list-unstyled">
                <li><strong>Alamat:</strong> Jl. Kesehatan No. 123, Kota Sehat</li>
                <li><strong>Email:</strong> klinikumum@example.com</li>
                <li><strong>Telepon:</strong> (021) 123-4567</li>
                <li><strong>Jam Operasional:</strong> Senin - Sabtu, 08:00 - 17:00</li>
            </ul>

            <div class="mt-3">
                <h6>Peta Lokasi</h6>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18..." width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        {{-- Form Kontak --}}
        <div class="col-md-6">
            <h5 class="fw-semibold">Formulir Pesan</h5>
            <form action="#" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Anda">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="email@domain.com">
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea id="pesan" name="pesan" rows="4" class="form-control" placeholder="Tulis pesan Anda..."></textarea>
                </div>
                <button type="submit" class="btn btn-success">Kirim Pesan</button>
            </form>
        </div>
    </div>
@endsection