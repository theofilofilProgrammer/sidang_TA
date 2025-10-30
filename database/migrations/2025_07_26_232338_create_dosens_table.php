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
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nidn')->unique(); // Nomor Induk Dosen Nasional, harus unik
            $table->string('nama_dosen');
            $table->string('e_mail_dosen')->nullable();
            $table->string('no_telp_dosen')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('status_kepegawaian')->nullable();
            $table->string('bidang_keahlian')->nullable();
            $table->text('deskripsi_bidang_keahlian')->nullable();
            $table->string('jenis_dosen')->nullable();
            $table->string('foto_profil_dosen')->nullable(); // Path ke file gambar
            $table->string('tempat_tinggal_dosen')->nullable();
            $table->text('riwayat_pendidikan')->nullable();
            $table->string('perguruan_tinggi')->nullable();
            $table->string('bidang_keahlian_pendidikan')->nullable();
            $table->text('minat_penelitian')->nullable();
            $table->text('visi_dosen')->nullable();
            $table->text('misi_dosen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
