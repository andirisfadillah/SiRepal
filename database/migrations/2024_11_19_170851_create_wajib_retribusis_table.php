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
        Schema::create('wajib_retribusis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->index();
            $table->string('nama_lengkap');
            $table->string('telepon');
            $table->string('nik');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('status', 1)->nullable();
            $table->date('tindaklanjut_tgl')->nullable();
            $table->string('tindaklanjut_user')->nullable();            
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wajib_retribusis');
    }
};
