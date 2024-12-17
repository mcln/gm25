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
        Schema::create('upload_exercises', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id')->nullable(); 
            $table->foreign('user_id') 
                  ->references('id') 
                  ->on('users') 
                  ->onDelete('set null') 
                  ->onUpdate('cascade');

            $table->unsignedBigInteger('teacher_id')->nullable();

            $table->string('public_id')->nullable(); 
            $table->string('url')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('slug')->nullable(); 
            $table->string('image_header')->nullable(); 
            $table->string('image_development_1')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upload_exercises');
    }
};
