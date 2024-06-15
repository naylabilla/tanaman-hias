<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $jumlahProduk = Produk::count();

        $totalStok = Produk::sum('stok');

        return view('admin.beranda_penjual', compact('jumlahProduk', 'totalStok'));
    }
}
