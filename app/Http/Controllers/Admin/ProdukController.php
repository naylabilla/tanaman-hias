<?php

namespace App\Http\Controllers\Admin;


use App\Models\Produk;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
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
        Session::flash('nama', $request->nama);
        Session::flash('tinggi', $request->tinggi);
        Session::flash('stok', $request->stok);
        Session::flash('harga', $request->harga);
        Session::flash('deskripsi', $request->deskripsi);
        Session::flash('kategori', $request->kategori);
        
        $request->validate([
            'nama' => 'required|string',
            'tinggi' => 'required|integer',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'gambar' => 'required|max:3000',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
        ],[
            'nama.required'=>'Nama Produk harus diisi ngab!',
            'tinggi.required'=>'Tinggi Produk harus diisi ngab!',
            'stok.required'=>'Stok Produk harus diisi ngab!',
            'harga.required'=>'Harga Produk harus diisi ngab!',
            'gambar.required'=>'Gambar Produk harus diisi ngab!',
            'deskripsi.required'=>'Deskripsi Produk harus diisi ngab!',
            'kategori.required'=>'Kategori harus diisi ngab!',
            // 'gambar.mimes'=>'Type gambar produknya harus JPG/JPEG/PNG ngab!',
            'gambar.max'=>'Ukuran file gambar nya maks 3 mb ngab!',
            // 'gambar.image' => 'File harus berupa gambar.',
            // 'gambar.mimes' => 'Ekstensi file harus berupa JPG, JPEG, atau PNG.',
            // 'gambar.max' => 'Ukuran file tidak boleh melebihi 5 MB.',
            'harga.integer'=>'Ketikan harganya jangan pake tanda baca ngab, harus angka aja!',
            'stok.integer'=>'Ketikan stok jangan pake tanda baca ngab, harus angka aja!',
            'tinggi.integer'=>'Ketikan tingginya jangan pake tanda baca ngab, harus angka aja!',
        ]);

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
        $request->validate([
            'nama' => 'required|string',
            'tinggi' => 'required|integer',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'gambar' => 'required|max:3000',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
        ],[
            'nama.required'=>'Nama Produk harus diisi ngab!',
            'tinggi.required'=>'Tinggi Produk harus diisi ngab!',
            'stok.required'=>'Stok Produk harus diisi ngab!',
            'harga.required'=>'Harga Produk harus diisi ngab!',
            'gambar.required'=>'Gambar Produk harus diisi ngab!',
            'deskripsi.required'=>'Deskripsi Produk harus diisi ngab!',
            'kategori.required'=>'Kategori harus diisi ngab!',
            // 'gambar.mimes'=>'Type gambar produknya harus JPG/JPEG/PNG ngab!',
            'gambar.max'=>'Ukuran file gambar nya maks 3 mb ngab!',
            // 'gambar.image' => 'File harus berupa gambar.',
            // 'gambar.mimes' => 'Ekstensi file harus berupa JPG, JPEG, atau PNG.',
            // 'gambar.max' => 'Ukuran file tidak boleh melebihi 5 MB.',
            'harga.integer'=>'Ketikan harganya jangan pake tanda baca ngab, harus angka aja!',
            'stok.integer'=>'Ketikan stok jangan pake tanda baca ngab, harus angka aja!',
            'tinggi.integer'=>'Ketikan tingginya jangan pake tanda baca ngab, harus angka aja!',
        ]);
        
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
