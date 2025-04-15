<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Event - {{ $event->nama_event }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            margin: 0;
            padding: 0;
        }

        :root {
            --main-blue: #143D60;
            --light-blue: #2DB6F0;
            --highlight-green: #C5F01D;
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

        .event-description p {
            border-left: 3px solid black;
            padding-left: 1rem;
            margin-bottom: 1rem;
            max-width: 600px;
            word-break: break-word;
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
            background-color: var(--light-blue);
        }
    </style>
</head>
<body>

@extends('layout.header')

    @section('content')
        <div class="row vh-100 g-0">
            <div class="col-md-6 p-0">
                <img src="{{ asset('storage/' . $event->gambar) }}" alt="{{ $event->nama_event }}" class="full-image w-100 h-100" style="object-fit: cover">
            </div>

            <!-- Detail konten -->
            <div class="col-md-6 d-flex flex-column justify-content-start p-5">
                <h2 class="fw-bold fs-1">{{ $event->nama_event }}</h2>

                <div class="section-line mt-4"></div>
                <div class="event-description">
                    <p>{{ $event->informasi }}</p>
                </div>

                <div class="mt-5">
                    <h4 class="fw-semi-bold">Tangggal Event: {{ $event->tanggal }}</h2>
                </div>

                <a href="{{ route('pendaftaran.form') }}" class="btn btn-info mt-4">Daftar Sekarang</a>
            </div>
        </div>
    @endsection

</body>
</html>
