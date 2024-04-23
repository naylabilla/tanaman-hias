<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/pesanan_penjual', function () {
    return view('pesanan_penjual');
});

Route::get('/produk', function () {
    return view('produk');
});
