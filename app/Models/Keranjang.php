<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjang';
    protected $primaryKey = 'id_keranjang';
    
    public $timestamps = false; // Tambahkan ini untuk menonaktifkan timestamps

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'kode_produk', 'kode');
    }

    public function pengguna()
    {
        return $this->belongsTo(User::class, 'id_pengguna', 'id_pengguna');
    }
}
