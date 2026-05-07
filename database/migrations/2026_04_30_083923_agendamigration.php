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
        Schema::create('agenda',function (Blueprint $table){
            $table->id();
            $table->string('nama_agenda');
            $table->string('waktu',20);
            $table->date('tanggal');
            $table->string('tempat');
            $table->foreignId('id_bagian')->references('id')->on('bagian');
            $table->string('user_create');
            $table->string('user_edit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda');
    }
};
