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
       
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('kepadatan_lalu_lintas');
            $table->integer('Populasi_penduduk');
            $table->integer('persaingan_bisnis');
            $table->integer('biaya_sewa');
            $table->integer('peluang_tenaga_kerja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
