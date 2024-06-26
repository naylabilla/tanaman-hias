<?php

namespace App\Http\Controllers\Admin;

use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\User; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    
    public function addToCart(Request $request, $kode_produk)
    {
        $produk = Produk::findOrFail($kode_produk);

        $keranjang = Keranjang::where('kode_produk', $kode_produk)
            ->where('id_pengguna', Auth::id())
            ->first();

        if ($keranjang) {
            
            $keranjang->jumlah += 1;
        } else {
            
            $keranjang = new Keranjang();
            $keranjang->kode_produk = $kode_produk;
            $keranjang->id_pengguna = Auth::id();
            $keranjang->jumlah = 1;
        }

        $keranjang->save();

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    
    public function showCart()
    {
        $keranjang = Keranjang::where('id_pengguna', Auth::id())->with('produk')->get();
        return view('pembeli.keranjang', compact('keranjang'));
    }

    
    public function removeFromCart($id_keranjang)
    {
        $keranjang = Keranjang::findOrFail($id_keranjang);
        if ($keranjang->id_pengguna == Auth::id()) {
            $keranjang->delete();
            return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang!');
        } else {
            return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk menghapus produk ini.');
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
