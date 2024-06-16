<?php

namespace App\Http\Controllers;

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

                return view('admin.beranda_penjual', compact('jumlahProduk', 'totalStok'));
            } elseif ($role == 'pembeli') {
                $produkOutdoor = Produk::where('kategori', 'Outdoor')->get();

                $produkIndoor = Produk::where('kategori', 'Indoor')->get();

                return view('pembeli.dashboard', compact('produkOutdoor', 'produkIndoor'));
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
