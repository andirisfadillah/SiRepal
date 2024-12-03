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
        Schema::create('konfirmasi_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_ms_rekening');
            $table->string('file_bukti');
            $table->date('tgl_bayar');
            $table->string('nama_pemilik_rekening');
            $table->unsignedBigInteger('id_ref_bank');
            $table->string('no_rekening_pemilik');
            $table->string('status');
            $table->date('tindaklanjut_tgl');
            $table->string('tindaklanjut_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konfirmasi_pembayaran');
    }
};
