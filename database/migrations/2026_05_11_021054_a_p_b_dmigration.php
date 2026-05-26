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
        Schema::create('apbd',function(Blueprint $table){
            $table->id();
            $table->string('perangkat_daerah');
            $table->bigInteger('anggaran_pendapatan')->default(0);
            $table->bigInteger('realisasi_pendapatan')->default(0);
            $table->bigInteger('anggaran_belanja')->default(0);
            $table->bigInteger('realisasi_belanja')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apbd');
    }
};
