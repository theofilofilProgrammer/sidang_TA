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
        Schema::create('plo_mata_kuliah', function (Blueprint $table) {
            $table->foreignId('program_learning_outcome_id')->constrained('program_learning_outcomes')->onDelete('cascade');
            $table->foreignId('mata_kuliah_id')->constrained('mata_kuliahs')->onDelete('cascade');
            $table->primary(['program_learning_outcome_id', 'mata_kuliah_id']);
            // $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plo_mata_kuliah');
    }
};
