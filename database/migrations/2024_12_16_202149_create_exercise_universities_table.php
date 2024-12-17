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
        Schema::create('exercise_universities', function (Blueprint $table) {
            $table->id();
            
            // Relacionar con la tabla 'universities'
            $table->foreignId('university_id')->constrained()->onDelete('cascade');
            
            // Relacionar con la tabla 'subjects' (ramo)
            $table->foreignId('subject_id')->constrained()->onDelete('cascade');
            
            // Relacionar con la tabla 'types' (tipo de ejercicio)
            $table->foreignId('type_id')->constrained()->onDelete('cascade');
            
            // Relacionar con la tabla 'semesters' (semestre)
            $table->foreignId('semester_id')->constrained()->onDelete('cascade');
        
            // Otros campos relevantes
            $table->string('slug')->unique();
            $table->string('active', 45);
            $table->unsignedInteger('order')->nullable()->limit(3);
            $table->unsignedInteger('view_count')->default(0);
            $table->unsignedInteger('likes')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_universities');
    }
};
