<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'Klinik Umum' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Klinik Umum</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/pasien/dashboard">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pasien/tentang_kami">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pasien/jadwal_dokter">Jadwal dan Dokter</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pasien/pelayanan">Fasilitas & Pelayanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pasien/hubungi_kami">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Konten Halaman --}}
    <div class="container py-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
