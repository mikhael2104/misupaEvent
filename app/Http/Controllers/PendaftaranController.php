<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{

    public function create()
    {
        $events = Event::all(); // pastikan kolom 'id_event' dan 'nama_event' ada di tabel 'events'
        return view('pendaftaran.form', compact('events'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pendaftars,email',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'id_event' => 'required|exists:events,id_event',
        ]);

        Pendaftar::create($validated);

        return redirect()->route('pendaftaran.form')->with('success', 'Pendaftaran berhasil disimpan!');
    }
}

