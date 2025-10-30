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
        Schema::create('dasar_hukums', function (Blueprint $table) {
            $table->id();
            $table->string('judul_dasar_hukum');
            $table->string('jenis_dasar_hukum')->nullable();
            $table->string('jenis_hukum_berkaitan_judul')->nullable();
            $table->integer('tahun_dasar_hukum')->nullable();
            $table->string('nomor_pendaftaran')->nullable();
            $table->text('deskripsi_dasar_hukum')->nullable();
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Admin yang membuat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dasar_hukums');
    }
};
