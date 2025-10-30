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
        Schema::create('bidang_unggulan_dosen', function (Blueprint $table) {
            $table->foreignId('bidang_unggulan_id')->constrained('bidang_unggulans')->onDelete('cascade');
            $table->foreignId('dosen_id')->constrained('dosens')->onDelete('cascade');
            $table->primary(['bidang_unggulan_id', 'dosen_id']); // Kunci utama komposit
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidang_unggulan_dosen');
    }
};
