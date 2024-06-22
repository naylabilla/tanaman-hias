<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'stok', 'tinggi', 'kategori', 'harga', 'deskripsi', 'gambar'];
    protected $guarded = ['kode'];
    protected $primaryKey = 'kode';
    protected $table = 'produk';
    public $timestamps = false;

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'kode_produk', 'kode');
    }
}
