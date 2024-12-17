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
        Schema::create('development_exercises', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('exercise_id'); 

            $table->foreign('exercise_id') 
                  ->references('id') 
                  ->on('exercises') 
                  ->onDelete('cascade') 
                  ->onUpdate('cascade'); 

            $table->string('image_path',2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('development_exercises');
    }
};
