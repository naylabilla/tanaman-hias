<?php

namespace App\Http\Controllers;

use App\Models\Resi;
use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $role = Auth()->user()->role;

            if ($role == 'admin') {
                $jumlahProduk = Produk::count();

                $totalStok = Produk::sum('stok');

                $totalPesanan = Resi::count();

                $pendapatan = $pendapatan = Pesanan::where('status', 'Pesanan Selesai')
                ->get()
                ->sum(function ($pesanan) {
                    return $pesanan->harga_satuan * $pesanan->jumlah;
                });

                return view('admin.beranda_penjual', compact('jumlahProduk', 'totalStok', 'totalPesanan', 'pendapatan'));
            } elseif ($role == 'pembeli') {
                $produkOutdoor = Produk::where('kategori', 'Outdoor')->get();

                $produkIndoor = Produk::where('kategori', 'Indoor')->get();

                $produkPopuler = Produk::where('stok', '<', 5)->get();

                return view('pembeli.dashboard', compact('produkOutdoor', 'produkIndoor', 'produkPopuler'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

    }


    public function detail(string $id)
    {
        $data = Produk::where('kode', $id)->first();
        return view('pembeli.detail_produk')->with('data', $data);
    }
}
