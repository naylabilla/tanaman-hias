<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('pembeli.login');
});

Route::get('/pesanan_penjual', function () {
    return view('admin.pesanan_penjual');
});

Route::get('/detail_produk', function () {
    return view('pembeli.detail_produk');
});

Route::get('/beranda_penjual', function () {
    return view('admin.beranda_penjual');
});

Route::get('/pembayaran', function () {
    return view('pembeli.pembayaran');
});

Route::get('/transaksi', function () {
    return view('pembeli.transaksi');
});

Route::get('/alamat', function () {
    return view('pembeli.alamat_pengiriman');
});

Route::get('/rincian_pesanan', function () {
    return view('pembeli.rincian_pesanan');
});

Route::get('/cetak_resi_penjual', function () {
    return view('admin.cetak_resi_penjual');
});

Route::get('/cetak_resi', function () {
    return view('pembeli.cetak_resi');
});

Route::get('/riwayat_pesanan', function () {
    return view('pembeli.riwayat_pesanan');
});

Route::get('/daftar_akun', function () {
    return view('pembeli.daftar_akun');
});

Route::get('/produk', function () {
    return view('pembeli.produk');
});

Route::get('/dashboard', function () {
    return view('pembeli.dashboard');
});

Route::get('/tambah_produk', function () {
    return view('admin.tambah_produk');
});

Route::get('/pengaturan_akun_pembeli', function () {
    return view('pembeli.pengaturan_akun_pembeli');
});

Route::get('/ubah_pengaturan_akun_pembeli', function () {
    return view('pembeli.ubah_pengaturan_akun_pembeli');
});

Route::get('/footer_pembeli', function () {
    return view('components/footer_pembeli');
});

Route::get('/header_pembeli', function () {
    return view('components/header_pembeli');
});

Route::get('/header_penjual', function () {
    return view('components/admin.header_penjual');
});

Route::get('/sidebar_penjual', function () {
    return view('components/admin.sidebar_penjual');
});
Route::get('/ubah_password', function () {
    return view('pembeli.ubah_password');
});

Route::get('/lupa_password', function () {
    return view('pembeli.lupa_password');
});

Route::get('/keranjang', function () {
    return view('pembeli.keranjang');
});
