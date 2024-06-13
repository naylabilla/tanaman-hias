<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Produk::orderBy('kode', 'desc')->paginate(4);
        return view('admin.produk')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah_produk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama'=>$request->nama,
            'stok'=>$request->stok,
            'tinggi'=>$request->tinggi,
            'kategori'=>$request->kategori,
            'harga'=>$request->harga,
            'deskripsi'=>$request->deskripsi,
            'gambar'=>$request->gambar,
        ];
        Produk::create($data);
        return redirect()->to('produk')->with('success', 'Berhasil menambahkan produk baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Produk::where('kode', $id)->first();
        return view('admin.detail_produk_penjual')->with('data', $data);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Produk::where('kode', $id)->first();
        return view('admin.edit_produk')->with('data', $data);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama'=>$request->nama,
            'stok'=>$request->stok,
            'tinggi'=>$request->tinggi,
            'kategori'=>$request->kategori,
            'harga'=>$request->harga,
            'deskripsi'=>$request->deskripsi,
            'gambar'=>$request->gambar,
        ];
        Produk::where('kode', $id)->update($data);
        return redirect()->to('produk')->with('success', 'Berhasil mengupdate produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produk::where('kode', $id)->delete();
        return redirect()->to('produk')->with('success', 'Berhasil menghapus produk');
    }
}
