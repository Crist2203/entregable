<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Protegemos las rutas con autenticación
    Route::get('/servicios', \App\Livewire\Servicios\Index::class)->name('servicios.index');
    Route::get('/servicios/create', \App\Livewire\Servicios\Create::class)->name('servicios.create');
    Route::get('/servicios/show/{servicio}', \App\Livewire\Servicios\Show::class)->name('servicios.show');
    Route::get('/servicios/update/{servicio}', \App\Livewire\Servicios\Edit::class)->name('servicios.edit');

    Route::get('/reservas', \App\Livewire\Reservas\Index::class)->name('reservas.index');
    Route::get('/reservas/create', \App\Livewire\Reservas\Create::class)->name('reservas.create');
    Route::get('/reservas/show/{reserva}', \App\Livewire\Reservas\Show::class)->name('reservas.show');
    Route::get('/reservas/update/{reserva}', \App\Livewire\Reservas\Edit::class)->name('reservas.edit');
});
