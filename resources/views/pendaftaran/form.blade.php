<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-shadow {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
        }

        .left-box {
            max-width: 500px;
        }

        .event-card img {
            height: 180px;
            object-fit: cover;
        }

        .event-section {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
        }

        @media (max-width: 768px) {
            .row {
                flex-direction: column;
            }
        }
    </style>
</head>
<body class="bg-light">

@include('layout.header')

<div class="container mt-5">
    <div class="row">
        <!-- Form di kiri -->
        <div class="col-md-5">
            <div class="left-box custom-shadow bg-white p-4 rounded">
                <h2>Form Pendaftaran Event</h2>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('pendaftaran.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="id_event" class="form-label">Event</label>
                        <select class="form-select" id="id_event" name="id_event" required>
                            <option value="">-- Pilih Event --</option>
                            @foreach($events as $event)
                                <option value="{{ $event->id_event }}">{{ $event->nama_event }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Daftar</button>
                    <button class="btn">
                        <a href="{{ route('home') }}" class="text-decoration-none ">
                            Kembali
                        </a>
                    </button>
                </form>
            </div>
        </div>

        <!-- Kartu event di kanan -->
        <div class="col-md-7">
            <h4 class="mb-3">Daftar Event</h4>
            <a href="{{ route('event.show', $event->id_event) }}" class="text-decoration-none text-dark">
            <div class="event-section">
                @foreach($events as $event)
                    <div class="card event-card">
                        <img src="{{ asset('storage/' . $event->gambar) }}" class="card-img-top" alt="{{ $event->nama_event }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->nama_event }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
            </a>
        </div>
    </div>
</div>
</body>
</html>
