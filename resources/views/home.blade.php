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
@include('layout.header')
<!-- Hero Section -->
<div class="hero-section">
    <h1 class="display-4 fw-bold">Selamat Datang di MisupaEvent!</h1>
    <p class="lead mt-3">Temukan event menarik dan daftarkan dirimu sekarang juga.</p>
    <a href="{{ route('pendaftaran.form') }}" class="btn btn-lg btn-primary mt-3">Daftar Sekarang</a>
</div>

<!-- Daftar Event -->
<div class="container mt-5">
    <h2 class="text-center mb-4 fw-bold fs-1" style="color:#143D60">Daftar Event</h2>
    <div class="event-slider-wrapper">
        <button class="slider-button left" onclick="scrollSlider(-1)">
            <i class="bi bi-caret-left-fill"></i>
        </button>
        <div class="event-slider" id="eventSlider">
            @foreach($events as $event)
                <div class="card event-card">
                    <a href="{{ route('event.show', $event->id_event) }}" class="text-decoration-none text-dark">
                        <img src="{{ asset('storage/' . $event->gambar) }}" class="card-img-top" alt="{{ $event->nama_event }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->nama_event }}</h5>
                            <p class="card-text">{{\Illuminate\Support\Str::limit( $event->informasi, 80) }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <button class="slider-button right" onclick="scrollSlider(1)">
            <i class="bi bi-caret-right-fill"></i>
        </button>
    </div>    
</div>

<script src="assets/js/main.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
