<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;
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

        if (empty($keranjangIds) || empty($quantities)) {
            return redirect()->back()->with('error', 'Tidak ada produk yang dipilih.');
        }

        

        foreach ($keranjangIds as $index => $idKeranjang) {
            $keranjangItem = Keranjang::find($idKeranjang);

            if ($keranjangItem) {
                $produk = Produk::where('kode', $keranjangItem->kode_produk)->first();
                
                
                if (!$produk || $produk->stok <= 0) {
                    return redirect()->back()->with('error', 'Produk dengan kode ' . $keranjangItem->kode_produk . ' tidak tersedia atau stok habis.');
                }

               
                if ($quantities[$index] > $produk->stok) {
                    return redirect()->back()->with('error', 'Jumlah produk dengan kode ' . $keranjangItem->kode_produk . ' melebihi stok yang tersedia.');
                }

                
                $pesanan = new Pesanan();
                $pesanan->resi_id = $resi->id;
                $pesanan->kode_produk = $keranjangItem->kode_produk;
                $pesanan->jumlah = $quantities[$index];
                $pesanan->status = 'Menunggu Konfirmasi';
                // $pesanan->keranjang_id = $keranjangItem->id;
                $pesanan->harga_satuan = $produk->harga;

                
                // $produk->stok -= $pesanan->jumlah;
                // $produk->save();

                $pesanan->save();
            }

            // if ($keranjangItem) {
            //     $pesanan = new Pesanan();
            //     $pesanan->resi_id = $resi->id;
            //     $pesanan->kode_produk = $keranjangItem->kode_produk;
            //     $pesanan->jumlah = $quantities[$index];
            //     $pesanan->status = 'Menunggu Konfirmasi';
            //     // $pesanan->id_keranjang = $keranjangItem->id;

            //     $produk = Produk::where('kode', $pesanan->kode_produk)->first();
            //     if ($produk) {
            //         $pesanan->harga_satuan = $produk->harga;

            //         $produk->stok -= $pesanan->jumlah;

            //         // Simpan update stok produk
            //         $produk->save();
            //     }
                

            //     $pesanan->save();
            // }

            
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
        $user = $resi->user;

        return view('pembeli.alamat_pengiriman', ['resi' => $resi, 'user' => $user]);
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

        $pesananItems = Pesanan::where('resi_id', $resi->id)->get();

        foreach ($pesananItems as $pesananItem) {
        $produk = Produk::where('kode', $pesananItem->kode_produk)->first();
        if ($produk) {
            if ($produk->stok < $pesananItem->jumlah) {
                return redirect()->back()->with('error', 'Stok produk ' . $produk->nama . ' tidak mencukupi.');
            }

            // Mengurangi stok produk
            $produk->stok -= $pesananItem->jumlah;
            $produk->save();

            // Mengurangi jumlah produk di keranjang
            $keranjangItem = Keranjang::where('kode_produk', $pesananItem->kode_produk)
                                      ->where('id_pengguna', $resi->user_id)
                                      ->first();
            if ($keranjangItem) {
                if ($keranjangItem->jumlah <= $pesananItem->jumlah) {
                    // Jika jumlah produk di keranjang kurang atau sama dengan jumlah yang dibeli, hapus dari keranjang
                    $keranjangItem->delete();
                } else {
                    // Kurangi jumlah produk di keranjang
                    $keranjangItem->jumlah -= $pesananItem->jumlah;
                    $keranjangItem->save();
                }
            }
        }
        
    }

        // $pesananItems = Pesanan::where('resi_id', $resi->id)->get();

        // foreach ($pesananItems as $pesananItem) {
        //     $keranjangItem = Keranjang::find($pesananItem->keranjang_id);
        //     if ($keranjangItem) {
        //         $keranjangItem->delete();
        //     }
        // }

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

        return redirect('dashboard')->with('success', 'Pesanan Berhasil Dibuat');
    }
        
    // public function rincian_pesanan($id)
    // {
    //     $resi = Resi::find($id);
    
    //     if (!$resi) {
    //         return redirect('/dashboard')->with('error', 'Resi tidak ditemukan.');
    //     }
    
    //     return view('pembeli.rincian_pesanan', ['resi' => $resi]);
    // }

    // public function riwayat_pesanan()
    // {
    //     $riwayatPesanan = Resi::with(['pesanan.produk'])->get();

    //     return view('pembeli.riwayat_pesanan', compact('riwayatPesanan'));
    // }

//     public function riwayatPesanan($id)
// {
//     $resi = Resi::with('pesanan.produk')->find($id);

//     if (!$resi) {
//         return redirect('/dashboard')->with('error', 'Resi tidak ditemukan.');
//     }

//     return view('pembeli.riwayat_pesanan', ['resi' => $resi]);
// }


}
