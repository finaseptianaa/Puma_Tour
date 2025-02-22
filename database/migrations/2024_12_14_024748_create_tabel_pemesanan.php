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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('paket_id')->references('id')->on('paket')->cascadeOnDelete();
            $table->date('tanggal_berangkat');
            $table->string('nama_rombongan');
            $table->integer('jumlah_pax');
            $table->string('no_hp');
            $table->string('status')->default('Belum Bayar'); //Belum bayar, sedang diproses, lunas
            $table->string('bukti_pembayaran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
