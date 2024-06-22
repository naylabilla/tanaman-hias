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
        Schema::create('resis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penerima')->nullable();
            $table->string('username')->nullable();
            $table->string('no_hp')->nullable();
            $table->enum('tujuan', ['Rumah', 'Kantor'])->nullable();
            $table->text('alamat')->nullable();
            $table->enum('kecamatan', ['Batam Kota', 'Batu Aji', 'Batu Ampar', 'Bengkong', 'Nongsa', 'Sekupang'])->nullable();
            $table->text('pesan')->nullable();
            $table->string('kode_pos')->nullable();
            $table->enum('metode_pembayaran', ['Transfer Bank', 'Bayar di Tempat'])->nullable();
            $table->string('bukti_pembayaran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resis');
    }
};