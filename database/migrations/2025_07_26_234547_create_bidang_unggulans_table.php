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
        Schema::create('bidang_unggulans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bidang_unggulan');
            $table->string('fokus_bidang')->nullable();
            $table->text('deskripsi_lengkap_bidang')->nullable();
            $table->string('gambar_bidang_unggulan')->nullable(); // Path ke gambar
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Admin yang membuat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidang_unggulans');
    }
};
