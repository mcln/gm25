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
        Schema::create('degrees', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('university_id')->nullable(); 

            $table->foreign('university_id') 
                  ->references('id') 
                  ->on('universities') 
                  ->onDelete('set null') 
                  ->onUpdate('set null'); 

            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('degrees');
    }
};
