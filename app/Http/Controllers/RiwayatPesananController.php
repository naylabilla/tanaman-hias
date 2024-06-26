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

    public function show($resi_id)
    {
        $pesananGroup = Pesanan::where('resi_id', $resi_id)->get();

        if ($pesananGroup->isEmpty()) {
            abort(404, 'Pesanan tidak ditemukan.');
        }

        $totalHarga = $pesananGroup->sum(function ($pesanan) {
            return $pesanan->jumlah * $pesanan->harga_satuan;
        });

        return view('pembeli.rincian_pesanan', compact('resi_id', 'pesananGroup', 'totalHarga'));
        }
}