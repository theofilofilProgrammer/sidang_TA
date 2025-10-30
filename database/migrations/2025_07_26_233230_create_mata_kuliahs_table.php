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
        Schema::create('mata_kuliahs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mk')->unique()->nullable(); // Kode Mata Kuliah, harus unik
            $table->string('nama_mk')->unique();
            $table->integer('semester')->nullable(); // Tambahkan ini setelah id()
            $table->integer('sks_teori')->nullable();
            $table->integer('sks_praktik')->nullable();
            $table->integer('jumlah_sks')->nullable(); // Bisa dihitung dari SKS Teori + Praktik
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_kuliahs');
    }
};
