<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Event - {{ $event->nama_event }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">MisupaEvent</a>
    </div>
</nav>

<!-- Detail Event Section -->
<div class="container mt-5">
    <div class="text-center">
        <h1 class="display-4">{{ $event->nama_event }}</h1>
        <img src="{{ asset('storage/' . $event->gambar) }}" class="img-fluid mb-4" alt="{{ $event->nama_event }}">
        <p class="lead">{{ $event->informasi }}</p>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
