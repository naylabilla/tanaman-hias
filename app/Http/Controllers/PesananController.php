<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\Resi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PesananController extends Controller
{
    public function submit_pesanan(Request $request)
    {
        $resi = new Resi();
        $resi->user_id = Auth::id();
        $resi->save();

        $keranjangIds = json_decode($request->input('keranjang'));
        $quantities = json_decode($request->input('jumlah'));

        foreach ($keranjangIds as $index => $idKeranjang) {
            $keranjangItem = Keranjang::find($idKeranjang);

            if ($keranjangItem) {
                $pesanan = new Pesanan();
                $pesanan->resis_id = $resi->id;
                $pesanan->kode_produk = $keranjangItem->kode_produk;
                $pesanan->jumlah = $quantities[$index];

                $produk = Produk::where('kode', $pesanan->kode_produk)->first();
                if ($produk) {
                    $pesanan->harga_satuan = $produk->harga;
                }

                $pesanan->save();
            }

            $keranjangItem->delete();
        }



        return redirect('pembayaran/' . $resi->id);
    }

    public function pembayaran($id)
    {
        $resi = Resi::find($id);

        return view('pembeli.pembayaran', ['resi' => $resi]);
    }

    public function alamat($id)
    {
        $resi = Resi::find($id);

        return view('pembeli.alamat_pengiriman', ['resi' => $resi]);
    }

    public function update_alamat(Request $request, $id)
    {
        $resi = Resi::find($id);

        $resi->nama_penerima = $request->nama_penerima;
        $resi->username = $request->username;
        $resi->no_hp = $request->no_hp;
        $resi->tujuan = $request->tujuan;
        $resi->alamat = $request->alamat;
        $resi->kecamatan = $request->kecamatan;
        $resi->kode_pos = $request->kode_pos;

        $resi->save();

        return redirect('pembayaran/' . $resi->id);
    }

    public function submit_pembayaran(Request $request, $id)
    {
        $resi = Resi::find($id);

        $resi->metode_pembayaran = $request->metode_pembayaran;
        $resi->pesan = $request->pesan;

        $resi->save();

        if ($request->metode_pembayaran == 'Transfer Bank') {
            return view('pembeli.transaksi', ['resi' => $resi]);
        } else {
            return redirect('dashboard')->with('success', 'Pesanan Berhasil Dibuat');
        }
    }

    public function submit_bukti_bayar(Request $request, $id)
    {
     $resi = Resi::find($id);

    if (!$resi) {
        return redirect()->back()->with('error', 'Resi tidak ditemukan.');
    }

    // Validasi input
    $request->validate([
        'bukti_pembayar' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    // Generate UUID untuk nama file
    $file = $request->file('bukti_pembayar');
    $uuid = Str::uuid()->toString();
    $extension = $file->getClientOriginalExtension();
    $filename = $uuid . '.' . $extension;

    // Simpan file ke storage
    $file->storeAs('public/bukti_pembayaran', $filename);

    // Simpan informasi file ke database
    $resi->bukti_pembayaran = $filename;
    $resi->save();

        return redirect()->route('rincian_pesanan', ['id' => $resi->id])->with('success', 'Pesanan Berhasil Dibuat');
    }
    
    public function rincian_pesanan($id)
    {
        $resi = Resi::find($id);
    
        if (!$resi) {
            return redirect('/dashboard')->with('error', 'Resi tidak ditemukan.');
        }
    
        return view('pembeli.rincian_pesanan', ['resi' => $resi]);
    }


}
