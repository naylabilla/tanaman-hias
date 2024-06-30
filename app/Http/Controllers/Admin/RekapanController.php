<?php

namespace App\Http\Controllers\Admin;
use App\Models\Resi;
use App\Models\Pesanan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RekapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesananPenjual = Pesanan::with('resi', 'produk')->get()->groupBy('resi_id');

        return view('admin.pesanan_penjual', compact('pesananPenjual'));
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
    public function show($resi_id)
    {
        $pesananGroup = Pesanan::where('resi_id', $resi_id)->get();

        if ($pesananGroup->isEmpty()) {
            abort(404, 'Pesanan tidak ditemukan.');
        }

        $totalHarga = $pesananGroup->sum(function ($pesanan) {
            return $pesanan->jumlah * $pesanan->harga_satuan;
        });

        return view('admin.detail_pesanan_penjual', compact('resi_id', 'pesananGroup', 'totalHarga'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function resi($resi_id)
    {
        $pesananGroup = Pesanan::where('resi_id', $resi_id)->get();

        if ($pesananGroup->isEmpty()) {
            abort(404, 'Pesanan tidak ditemukan.');
        }

        $totalHarga = $pesananGroup->sum(function ($pesanan) {
            return $pesanan->jumlah * $pesanan->harga_satuan;
        });

        return view('admin.cetak_resi_penjual', compact('resi_id', 'pesananGroup', 'totalHarga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $resiId)
    {
        
        $request->validate([
            'status' => 'required|string',
        ]);

        $affectedRows = Pesanan::where('resi_id', $resiId)->update(['status' => $request->input('status')]);

        if ($affectedRows) {
            return redirect()->back()->with('success', 'Status pesanan berhasil diperbarui.');
        }

        return redirect()->back()->with('error', 'Pesanan tidak ditemukan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
