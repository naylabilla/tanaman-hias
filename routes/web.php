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

Route::get('/tambah_produk', function () {
    return view('tambah_produk');
});

Route::get('/pengaturan_akun_pembeli', function () {
    return view('pengaturan_akun_pembeli');
});

Route::get('/ubah_pengaturan_akun_pembeli', function () {
    return view('ubah_pengaturan_akun_pembeli');
});

Route::get('/footer_pembeli', function () {
    return view('components/footer_pembeli');
});

Route::get('/header_pembeli', function () {
    return view('components/header_pembeli');
});

Route::get('/header_penjual', function () {
    return view('components/header_penjual');
});

Route::get('/sidebar_penjual', function () {
    return view('components/sidebar_penjual');
});
Route::get('/ubahpw', function () {
    return view('ubahpw');
});

Route::get('/lupapw', function () {
    return view('lupapw');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});