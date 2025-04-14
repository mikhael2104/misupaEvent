<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Event - {{ $event->nama_event }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --main-blue: #143D60;
            --light-blue: #2DB6F0;
            --highlight-green: #C5F01D;
        }

        .event-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 3rem;
        }

        .event-image {
            flex: 1;
            max-width: 400px;
        }

        .event-image img {
            width: 100%;
            height: auto;
            border: 2px solid #000;
        }

        .event-details {
            flex: 2;
        }

        .section-line {
            height: 5px;
            width: 100%;
            background-color: var(--light-blue);
            margin-bottom: 0.5rem;
            border-radius: 5px;
        }

        .event-description p {
            border-left: 3px solid black;
            padding-left: 1rem;
            margin-bottom: 1rem;
        }

        .btn-daftar {
            background-color: var(--highlight-green);
            border: none;
            color: #000;
            font-weight: bold;
            padding: 10px 25px;
            border-radius: 1rem;
        }

        .btn-daftar:hover {
            background-color: #b5e217;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">MisupaEvent</a>
    </div>
</nav>

<!-- Detail Section -->
<div class="container event-container">
    <!-- Gambar di sebelah kiri -->
    <div class="event-image">
        <img src="{{ asset('storage/' . $event->gambar) }}" alt="{{ $event->nama_event }}">
    </div>

    <!-- Detail konten -->
    <div class="event-details">
        <div class="section-line"></div>
        <h2 class="fw-bold">{{ $event->nama_event }}</h2>

        <div class="section-line mt-4"></div>
        <div class="event-description">
            <p>{{ $event->informasi }}</p>
        </div>

        <a href="{{ route('pendaftaran.form') }}" class="btn btn-daftar mt-4">Daftar Sekarang</a>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
