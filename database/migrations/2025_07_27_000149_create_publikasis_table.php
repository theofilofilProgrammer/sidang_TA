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
        Schema::create('publikasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul_publikasi');
            $table->text('abstrak_publikasi')->nullable();
            $table->text('deskripsi_publikasi')->nullable();
            $table->foreignId('jurnal_prosiding_id')->nullable()->constrained('jurnal_prosidings')->onDelete('set null'); // FK ke jurnal_prosidings. Satu publikasi terbit di satu jurnal/prosiding.
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Admin yang membuat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publikasis');
    }
};
