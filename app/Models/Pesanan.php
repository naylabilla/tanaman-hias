<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    public function resi()
    {
        return $this->belongsTo(Resi::class, 'resi_id', 'id');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'kode_produk', 'kode');
    }
}
