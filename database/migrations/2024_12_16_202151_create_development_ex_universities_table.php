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
        Schema::create('development_ex_universities', function (Blueprint $table) {
            $table->id();
        
            // Relacionar con la tabla 'exercise_universities'
            $table->foreignId('exercise_university_id')->constrained('exercise_universities')->onDelete('cascade');
        
            $table->string('image_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('development_ex_universities');
    }
};
