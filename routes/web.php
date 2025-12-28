<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Http\Controllers\TeamController;

Route::get('/', function (): View {
    return view('index'); // pastikan punya resources/views/index.blade.php
})->name('home');

Route::get('/detail-futsal', function (): View {
    return view('detail-futsal');
});

Route::get('/detail-basket', function (): View {
    return view('detail-basket');
});

Route::get('/detail-badminton', function (): View {
    return view('detail-badminton');
});

Route::get('/daftar', [TeamController::class, 'create'])->name('teams.create');
Route::post('/daftar', [TeamController::class, 'store'])->name('teams.store');
