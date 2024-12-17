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
        Schema::create('upload_exercises_postulates', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('upload_exercise_id')->nullable();
            $table->foreign('upload_exercise_id')
                ->references('id')
                ->on('upload_exercises')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->string('status')->nullable();

            $table->integer('valor_pesos')->nullable();
            $table->integer('valor_dolar')->nullable();
            $table->integer('horas_desarrollo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upload_exercises_postulates');
    }
};