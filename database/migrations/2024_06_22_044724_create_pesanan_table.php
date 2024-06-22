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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('resis_id');
            $table->unsignedBigInteger('kode_produk');
            $table->string('jumlah');
            $table->string('harga_satuan');
            $table->timestamps();

            $table->foreign('resis_id')->references('id')->on('resis');
            $table->foreign('kode_produk')->references('kode')->on('produk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
