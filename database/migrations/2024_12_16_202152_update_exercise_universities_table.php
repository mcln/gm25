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
        Schema::table('exercise_universities', function (Blueprint $table) {
            // Añadir la columna 'parent_id' para gestionar la relación jerárquica
            $table->foreignId('parent_id')->nullable()->constrained('exercise_universities')->onDelete('cascade');
            
            // Añadir la columna 'content' para almacenar el contenido del ejercicio
            $table->text('content')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exercise_universities', function (Blueprint $table) {
            // Eliminar las columnas añadidas en la migración 'up'
            $table->dropForeign(['parent_id']);
            $table->dropColumn('parent_id');
            $table->dropColumn('content');
        });
    }
};
