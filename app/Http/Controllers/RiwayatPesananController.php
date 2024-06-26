<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resi;
use App\Models\Pesanan;

class RiwayatPesananController extends Controller
{
    public function index()
    {
        $riwayatPesanan = Pesanan::with('resi', 'produk')->get()->groupBy('resi_id');

        return view('pembeli.riwayat_pesanan', compact('riwayatPesanan'));
    }
}