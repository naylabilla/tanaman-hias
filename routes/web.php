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

Route::get('/detail_produk', function () {
    return view('detail_produk');
});

Route::get('/beranda_penjual', function () {
    return view('beranda_penjual');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/alamat', function () {
    return view('alamat_pengiriman');
});

Route::get('/rincian_pesanan', function () {
    return view('rincian_pesanan');
});

Route::get('/cetak_resi_penjual', function () {
    return view('cetak_resi_penjual');
});

Route::get('/cetak_resi', function () {
    return view('cetak_resi');
});

Route::get('/riwayat_pesanan', function () {
    return view('riwayat_pesanan');
});

Route::get('/daftar_akun', function () {
    return view('daftar_akun');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
