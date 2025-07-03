<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Apoteker - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
        }
        .sidebar {
            width: 240px;
            background-color: #198754; /* Bootstrap success */
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
        }
        .sidebar a:hover, .sidebar .active {
            background-color: #146c43;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <!-- Sidebar -->
<div class="sidebar">
    <h4 class="text-white text-center py-4 border-bottom border-white">APOTEKER</h4>

    <a href="{{ route('apoteker.dashboard') }}" class="{{ request()->routeIs('apoteker.dashboard') ? 'active' : '' }}">
        🏠 Dashboard
    </a>

    <a href="{{ route('apoteker.obat.index') }}" class="{{ request()->routeIs('apoteker.obat.*') ? 'active' : '' }}">
        💊 Manajemen Obat
    </a>

    <a href="{{ route('apoteker.resep.index') }}" class="{{ request()->routeIs('apoteker.resep.*') ? 'active' : '' }}">
        📋 Resep Obat
    </a>

    {{-- Laporan Distribusi (opsional, belum ada route-nya) --}}
    <a href="#" class="{{ request()->routeIs('apoteker.laporan') ? 'active' : '' }}">
        📄 Laporan Distribusi
    </a>

    <a href="{{ route('logout') }}" onclick="return confirm('Yakin ingin logout?')">
        🚪 Logout
    </a>
</div>


    <!-- Main Content -->
    <div class="content">
        <nav class="navbar navbar-light bg-light mb-4 rounded shadow-sm">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Sistem Informasi Klinik - Apoteker</span>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
