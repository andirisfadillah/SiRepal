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
        Schema::create('kapalwajibs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->index();
            $table->string('nama_kapal');
            $table->unsignedBigInteger('id_jenis_kapal')->index();
            $table->unsignedInteger('ukuran');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kapal_wajibs');
    }
};
