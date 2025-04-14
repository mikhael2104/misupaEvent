<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PendaftaranController;

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->name('pendaftaran.form');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');