<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/rafie/index', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/detail-futsal', function () {
    return view('detail-futsal');
});
Route::get('/detail-basket', function () {
    return view('detail-basket');
});
Route::get('/detail-badminton', function () {
    return view('detail-badminton');
});
Route::get('/lomba', function () {
    return view('lomba');
});
Route::get('/kontak-admin', function () {
    return view('kontak-admin');
});