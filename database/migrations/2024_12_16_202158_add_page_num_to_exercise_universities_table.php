<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPageNumToExerciseUniversitiesTable extends Migration
{
    public function up()
    {
        Schema::table('exercise_universities', function (Blueprint $table) {
            $table->integer('page_num')->nullable(); // Agregar el nuevo campo
        });
    }

    public function down()
    {
        Schema::table('exercise_universities', function (Blueprint $table) {
            $table->dropColumn('page_num'); // Eliminar el campo si se revierte la migración
        });
    }
}

