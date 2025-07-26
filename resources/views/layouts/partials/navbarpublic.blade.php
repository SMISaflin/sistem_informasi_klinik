<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Klinik Cipanas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="/tentang_kamii">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="/jadwal_dokterr">Jadwal dan Dokter</a></li>
                <li class="nav-item"><a class="nav-link" href="/pelayanann">Fasilitas & Pelayanan</a></li>
                <li class="nav-item"><a class="nav-link" href="/hubungi_kamii">Hubungi Kami</a></li>
                   @guest
    <li class="nav-item">
        <a class="nav-link border-custom px-3 py-1 me-2" href="{{ route('login') }}">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link border-custom px-3 py-1" href="{{ route('register') }}">Register</a>
    </li>
@else
    <li class="nav-item">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-link nav-link" style="display:inline; padding: 0; border: none; background: none;">Logout</button>
        </form>
    </li>
@endguest


            </ul>
        </div>
    </div>
</nav>
