<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameToExerciseUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('exercise_universities', function (Blueprint $table) {
            // Agrega la nueva columna 'name'
            $table->string('name')->nullable()->after('slug'); // 'after' especifica dónde colocar la columna
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exercise_universities', function (Blueprint $table) {
            // Eliminar la columna 'name' si se revierte la migración
            $table->dropColumn('name');
        });
    }
}
