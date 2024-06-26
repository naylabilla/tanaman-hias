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

        return view('pembeli.rincian_pesanan', compact('resi_id', 'pesananGroup', 'totalHarga'));
        
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
