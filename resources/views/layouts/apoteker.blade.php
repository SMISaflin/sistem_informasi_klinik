<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (untuk ikon) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
        }

        .sidebar {
            width: 230px;
            background-color: #1f7a1f;
            color: #fff;
            padding-top: 20px;
            position: fixed;
            height: 100%;
        }

        .sidebar h4 {
            text-align: center;
            margin-bottom: 1rem;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 16px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #145214;
            color: #fff;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .main-content {
            margin-left: 230px;
            padding: 30px;
            width: 100%;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4>APOTEKER</h4>
        <hr style="color: white;">

        <a href="{{ route('apoteker.dashboard') }}" class="{{ Request::routeIs('apoteker.dashboard') ? 'active' : '' }}">
            <i class="bi bi-house-door-fill"></i> Dashboard
        </a>
        <a href="{{ route('apoteker.obat.index') }}" class="{{ Request::routeIs('apoteker.obat.*') ? 'active' : '' }}">
            <i class="bi bi-capsule"></i> Manajemen Obat
        </a>
        <a href="{{ route('apoteker.resep.index') }}" class="{{ Request::routeIs('apoteker.resep.*') ? 'active' : '' }}">
            <i class="bi bi-file-medical"></i> Resep Obat
        </a>
        {{-- <a href="{{ route('apoteker.laporan.distribusi') }}" class="{{ Request::routeIs('apoteker.laporan.*') ? 'active' : '' }}">
            <i class="bi bi-clipboard-data"></i> Laporan Distribusi
        </a> --}}
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
            @csrf
        </form>
    </div>

    <!-- Konten Utama -->
    <div class="main-content">
        <div class="container-fluid">
            <h5 class="mb-4">Sistem Informasi Klinik - Apoteker</h5>
            @yield('content')
        </div>
    </div>

</body>
</html>
