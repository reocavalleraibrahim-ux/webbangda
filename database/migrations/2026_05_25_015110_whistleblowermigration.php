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
        Schema::create('whistle_blower',function(Blueprint $table){
            $table->id();
            $table->string('nama_pelapor');
            $table->string('no_identitas');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->string('nomor_kontak');
            $table->string('uraian_aduan');
            $table->string('bukti_dukung');
            $table->boolean('verifikasi')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whistle_blower');
    }
};
