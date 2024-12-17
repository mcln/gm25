<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCoordsToExerciseUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('exercise_universities', function (Blueprint $table) {
            $table->string('coords')->nullable(); // Añadir el campo coords como string, nullable
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exercise_universities', function (Blueprint $table) {
            $table->dropColumn('coords'); // Remover el campo coords si se revierte la migración
        });
    }
};
