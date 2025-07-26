<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Klinik Umum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="dashboard">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="tentang_kami">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="jadwal_dokter">Jadwal dan Dokter</a></li>
                <li class="nav-item"><a class="nav-link" href="pelayanan">Fasilitas & Pelayanan</a></li>
                <li class="nav-item"><a class="nav-link" href="hubungi_kami">Hubungi Kami</a></li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="GET" onsubmit="return confirm('Yakin ingin logout?')">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-light ms-3">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
