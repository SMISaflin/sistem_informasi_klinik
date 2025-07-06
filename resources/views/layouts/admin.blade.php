<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Klinik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
<div class="d-flex">
    <div class="bg-dark text-white p-3" style="width: 250px; min-height: 100vh;">
        <h4 class="mb-4">Admin Klinik</h4>
        <ul class="nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link text-white">Dashboard</a></li>
            <li class="nav-item"><a href="{{ route('admin.dokter.index') }}" class="nav-link text-white">Data Dokter</a></li>
            <li class="nav-item"><a href="{{ route('admin.pasien.index') }}" class="nav-link text-white">Data Pasien</a></li>
            <li class="nav-item"><a href="{{ route('admin.jadwal_dokter.index') }}" class="nav-link text-white">Jadwal Dokter</a></li>
            <li class="nav-item"><a href="{{ route('admin.poli.index') }}" class="nav-link text-white">Poli</a></li>
            <li class="nav-item"><a href="{{ route('admin.obat.index') }}" class="nav-link text-white">Obat</a></li>
            <li class="nav-item"><a href="{{ route('admin.riwayat_pemeriksaan.index') }}" class="nav-link text-white">Riwayat Pemeriksaan</a></li>
            <li class="nav-item"><a href="/admin/laporan" class="nav-link text-white">Laporan</a></li>
              <li class="nav-item mt-3">
               <a href="{{ route('admin.user.approval') }}" class="nav-link {{ request()->routeIs('admin.user.approval') ? 'text-warning fw-bold' : 'text-white' }}">
                     User Approval
                </a>
            </li>
            <li class="nav-item mt-3"><a href="{{ route('logout') }}" class="nav-link text-danger">Logout</a></li>
        </ul>
    </div>
    <div class="p-4 flex-grow-1">
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
