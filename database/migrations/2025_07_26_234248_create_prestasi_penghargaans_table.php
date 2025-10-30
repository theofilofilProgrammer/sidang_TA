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
        Schema::create('prestasi_penghargaans', function (Blueprint $table) {
            $table->id();
            $table->string('judul_prestasi_penghargaan');
            $table->string('kategori_prestasi_penghargaan')->nullable();
            $table->integer('tahun_prestasi_penghargaan')->nullable();
            $table->text('deskripsi_prestasi_penghargaan')->nullable();
            $table->string('dokumentasi')->nullable(); // Path ke file dokumentasi
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Admin yang membuat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi_penghargaans');
    }
};
