<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // pastikan punya resources/views/index.blade.php
})->name('home');

Route::get('/detail-futsal', function () {
    return view('detail-futsal');
});

Route::get('/detail-basket', function () {
    return view('detail-basket');
});

Route::get('/detail-badminton', function () {
    return view('detail-badminton');
});

Route::get('/daftar', function () {
    return view('daftar');
});


