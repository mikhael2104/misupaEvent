<!DOCTYPE html>
<html>
<head>
    <title>Beranda - Event Kami</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .event-card img {
            height: 180px;
            object-fit: cover;
        }

        /* Grid layout untuk menampilkan event secara fleksibel */
        .event-section {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
        }

        /* Style untuk menampilkan gambar di tengah */
        .hero-section {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            height: 400px; /* Sesuaikan dengan tinggi yang diinginkan */
            background-color: #f8f9fa;
        }

        .hero-section img {
            max-height: 300px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">MisupaEvent</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pendaftaran.form') }}">Daftar Event</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero-section">
    <h1 class="display-4 fw-bold">Selamat Datang di MisupaEvent!</h1>
    <p class="lead mt-3">Temukan event menarik dan daftarkan dirimu sekarang juga.</p>
    <a href="{{ route('pendaftaran.form') }}" class="btn btn-lg btn-primary mt-3">Daftar Sekarang</a>
</div>

<!-- Daftar Event -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Event</h2>
    <div class="event-section">
        @foreach($events as $event)
            <div class="card event-card">
                <!-- Membungkus gambar dan informasi dalam link -->
                <a href="{{ route('event.show', $event->id_event) }}">
                    <img src="{{ asset('storage/' . $event->gambar) }}" class="card-img-top" alt="{{ $event->nama_event }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->nama_event }}</h5>
                        <p class="card-text">{{ $event->informasi }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
