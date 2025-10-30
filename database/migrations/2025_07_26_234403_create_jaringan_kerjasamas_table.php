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
        Schema::create('jaringan_kerjasamas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jaringan_kerjasama');
            $table->string('jenis_kemitraan')->nullable();
            $table->string('gambar_perusahaan')->nullable(); // Path ke gambar perusahaan
            $table->text('pengertian_jaringan_kerjasama')->nullable();
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Admin yang membuat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jaringan_kerjasamas');
    }
};
