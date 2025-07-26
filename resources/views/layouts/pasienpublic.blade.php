<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Klinik Cipanas' }} - @yield('title')</title>

    <!-- Bootstrap 5 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

   <style>
    body{
        padding-top: 70px;
    }
    .border-custom {
        border: 2px solid #0d6efd; /* Bootstrap Primary */
        border-radius: 8px;
        transition: all 0.3s ease-in-out;
        font-weight: 500;
        color: #0d6efd;
        background-color: white;
    }

    .border-custom:hover {
        background-color: #0d6efd;
        color: white;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(0, 123, 255, 0.2);
    }

    .nav-link {
        cursor: pointer;
    }
</style>
</head>
<body>

    {{-- Navbar --}}
    @include('layouts.partials.navbarpublic')

    {{-- Konten halaman --}}
    <main>
        @yield('content')
    
    </main>

    {{-- Footer --}}
     @include('layouts.partials.footer')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
