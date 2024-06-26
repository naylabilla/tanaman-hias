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
            $table->unsignedBigInteger('resi_id');
            $table->unsignedBigInteger('kode_produk');
            $table->string('jumlah');
            $table->string('harga_satuan');
            $table->enum('status', ['Menunggu Konfirmasi', 'Sedang di Proses', 'Sedang di Kirim', 'Pesanan Selesai'])->nullable();
            $table->timestamps();

            $table->foreign('resi_id')->references('id')->on('resi');
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
