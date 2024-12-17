<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveContentFromExerciseUniversitiesTable extends Migration
{
    public function up()
    {
        Schema::table('exercise_universities', function (Blueprint $table) {
            $table->dropColumn('content'); // Eliminar el campo content
        });
    }

    public function down()
    {
        Schema::table('exercise_universities', function (Blueprint $table) {
            $table->text('content')->nullable(); // Volver a agregar el campo si se revierte la migración
        });
    }
}

