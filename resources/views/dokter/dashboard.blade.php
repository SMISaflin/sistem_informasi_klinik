@extends('layouts.dokter')

@section('content')
    <h2>Selamat Datang, Dokter!</h2>
    <p>Anda dapat melihat daftar pasien, mengisi hasil pemeriksaan, dan meninjau riwayat pasien di sini.</p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-body">
                    <h5 class="card-title">Daftar Pasien Hari Ini</h5>
                    <p class="card-text">Lihat pasien yang terjadwal hari ini.</p>
                    <a href="/dokter/pasien" class="btn btn-primary">Lihat Pasien</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-success">
                <div class="card-body">
                    <h5 class="card-title">Riwayat Pemeriksaan</h5>
                    <p class="card-text">Tinjau dan kelola hasil pemeriksaan sebelumnya.</p>
                    <a href="/dokter/riwayat" class="btn btn-success">Lihat Riwayat</a>
                </div>
            </div>
        </div>
    </div>
@endsection
