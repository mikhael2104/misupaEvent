<!DOCTYPE html>
<html>
<head>
    <title>Beranda - Event Kami</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- main css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">MisupaEvent</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link fw-bold text-light" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-light" href="{{ route('pendaftaran.form') }}">Daftar Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-light" href="/admin/login">Tambah Event</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mx-auto p-4">
    @yield('content')
</div>

</body>
</html>