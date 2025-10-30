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
        Schema::create('data_prosiding', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('judul', 255); // Judul Prosiding
            $table->string('penulis', 255); // Nama Penulis
            $table->string('institusi', 255)->nullable(); // Institusi (optional)
            $table->string('isbn', 50)->nullable(); // ISBN jika ada
            $table->string('tahun', 4); // Tahun terbit
            $table->string('penerbit', 255)->nullable(); // Penerbit (opsional)
            $table->string('lokasi_konferensi', 255)->nullable(); // Lokasi konferensi
            $table->text('abstrak')->nullable(); // Abstrak prosiding
            $table->string('file_path', 255)->nullable(); // Path file prosiding (jika upload)
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_prosiding');
    }
};
