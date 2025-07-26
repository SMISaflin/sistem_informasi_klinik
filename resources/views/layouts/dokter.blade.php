<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dokter - Klinik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex">
    <div class="bg-primary text-white p-3" style="width: 250px; min-height: 100vh;">
        <h4 class="mb-4">Panel Dokter</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="/dokter/dashboard" class="nav-link text-white">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dokter.pasien.index') }}" class="nav-link text-white">Daftar Pasien</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dokter.jadwal.index') }}" class="nav-link text-white">Jadwal</a>

            </li>
           <li class="nav-item">
    <a href="{{ route('dokter.riwayat.index') }}" class="nav-link text-white">Riwayat Pemeriksaan</a>
</li>
            <li class="nav-item mt-3">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-warning w-100">Logout</button>
                </form>
            </li>
        </ul>
    </div>
    <div class="p-4 flex-grow-1">
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
