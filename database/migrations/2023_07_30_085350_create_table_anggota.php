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
        Schema::create('anggota_Cici', function (Blueprint $table) {
            $table->integer('id_anggota');
            $table->string('nama_anggota', '45');
            $table->string('alamat', '45');
            $table->string('no_hp', '12');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_Cici');
    }
};
