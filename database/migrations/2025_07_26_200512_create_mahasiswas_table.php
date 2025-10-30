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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique(); // Nomor Induk Mahasiswa, harus unik
            $table->string('nama_mahasiswa');
            $table->string('email_mahasiswa')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('mahasiswa_asal')->nullable();
            $table->string('tinggal_mahasiswa')->nullable();
            $table->string('agama_mahasiswa')->nullable();
            $table->string('no_telp_mahasiswa')->nullable();
            $table->string('nama_sekolah_dasar')->nullable();
            $table->string('nama_menengah_pertama')->nullable();
            $table->string('nama_sekolah_atas')->nullable();
            $table->integer('semester')->nullable();
            $table->decimal('ipk', 3, 2)->nullable();
            $table->text('motivasi_mahasiswa')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('foto_profil_mhs')->nullable(); // Path ke file gambar
            $table->string('pekerjaan_bagi_mahasiswa')->nullable();
            $table->text('deskripsi_pekerjaan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
