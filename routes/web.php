<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // pastikan punya resources/views/index.blade.php
})->name('home');

Route::get('/detail-badminton', function () {
    return view('detail-badminton');
});

Route::get('/basket', function () {
    return view('basket');
});

Route::get('/sepakbola', function () {
    return view('sepakbola');
});

