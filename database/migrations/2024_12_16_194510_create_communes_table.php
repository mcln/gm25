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
        Schema::create('communes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('city_id'); 

            $table->foreign('city_id') 
                  ->references('id') 
                  ->on('cities') 
                  ->onDelete('cascade') 
                  ->onUpdate('cascade'); 

            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communes');
    }
};
