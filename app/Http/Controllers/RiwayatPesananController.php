<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resi;
use App\Models\Pesanan;

class RiwayatPesananController extends Controller
{
    // public function index()
    // {
    //     // Ambil data riwayat pesanan dari database
    //     $riwayatPesanan = Pesanan::with('resi', 'produk')->get();

    //     return view('riwayat_pesanan.index', compact('riwayatPesanan'));
    // }
}