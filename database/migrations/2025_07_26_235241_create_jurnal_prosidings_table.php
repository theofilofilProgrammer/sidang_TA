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
        Schema::create('jurnal_prosidings', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_judul_jurnal_prosiding');
            $table->string('tipe_jurnal_prosiding')->nullable();
            $table->text('deskripsi_jurnal_prosiding')->nullable();
            $table->integer('tahun_jurnal_prosiding')->nullable();
            $table->string('issn')->nullable();
            $table->string('penerbit_jurnal_publikasi')->nullable();
            $table->string('kunjungi_jurnal_dalam_bentuk_url')->nullable(); // URL
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Admin yang membuat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurnal_prosidings');
    }
};
