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
        Schema::create('exercise_comments', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id')->nullable(); 
            $table->foreign('user_id') 
                  ->references('id') 
                  ->on('users') 
                  ->onDelete('set null') 
                  ->onUpdate('cascade'); 

            $table->unsignedBigInteger('exercise_id')->nullable(); 
            $table->foreign('exercise_id') 
                  ->references('id') 
                  ->on('exercises')   
                  ->onDelete('set null') 
                  ->onUpdate('cascade'); 

            $table->text('comment_content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_comments');
    }
};
