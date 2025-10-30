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
        Schema::create('pusat_unggulans', function (Blueprint $table) {
            $table->id();
            $table->string('judul_coe');
            $table->text('deskripsi_utama_coe')->nullable();
            $table->json('poin_poin_unggulan_coe')->nullable(); // Menggunakan JSON untuk poin-poin
            $table->string('email_dosen')->nullable(); // Bisa jadi relasi ke dosen jika ada
            $table->string('gambar_coe')->nullable(); // Path ke gambar
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Admin yang membuat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pusat_unggulans');
    }
};
