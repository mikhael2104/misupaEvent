<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data event
        $events = Event::all(); 

        // Kirim data events ke view home
        return view('home', compact('events'));
    }
}
