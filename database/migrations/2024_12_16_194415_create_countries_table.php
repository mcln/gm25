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
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('currency_id')->nullable(); 

            $table->foreign('currency_id') 
                ->references('id') 
                ->on('currencies') 
                ->onDelete('set null') 
                ->onUpdate('cascade');

            $table->string('name');
            $table->integer('country_code');
            $table->string('flag_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
