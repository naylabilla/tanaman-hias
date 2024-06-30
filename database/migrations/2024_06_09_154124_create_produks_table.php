<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id('kode');
            $table->string('nama');
            $table->integer('stok');
            $table->string('tinggi');
            $table->enum('kategori', ['Indoor', 'Outdoor']);
            $table->integer('harga');
            $table->text('deskripsi');
            $table->string('gambar');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
