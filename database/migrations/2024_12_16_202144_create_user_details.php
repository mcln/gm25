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
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->string('degree')->nullable();
            $table->string('university')->nullable();
            $table->string('country_residence')->nullable();
            
            $table->text('about')->nullable();
            $table->text('specialty')->nullable();
            $table->text('masters_diplomas')->nullable();
            $table->text('experience')->nullable();

            $table->string('example_exerc_photo1')->nullable();
            $table->string('example_exerc_photo2')->nullable();
            $table->string('example_exerc_photo3')->nullable();

            $table->string('example_exerc_video1')->nullable();
            $table->string('example_exerc_video2')->nullable();
            $table->string('example_exerc_video3')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
