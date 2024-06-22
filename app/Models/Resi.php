<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resi extends Model
{
    use HasFactory;

    protected $table = 'resis';

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'resis_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id_pengguna');
    }
}
