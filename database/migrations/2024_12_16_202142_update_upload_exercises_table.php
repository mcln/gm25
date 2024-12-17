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
        Schema::table('upload_exercises', function (Blueprint $table) {
            $table->timestamp('time_since_accept')->nullable();
            $table->integer('time_development')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('upload_exercises', function (Blueprint $table) {
            $table->dropColumn('time_since_accept');
            $table->dropColumn('time_development');
        });
    }
};
