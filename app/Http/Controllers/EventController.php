<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($id)
    {
        // Ambil event berdasarkan ID
        $event = Event::findOrFail($id);

        // Kirim data event ke view
        return view('event.show', compact('event'));
    }
}

