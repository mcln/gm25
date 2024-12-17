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
            $table->timestamp('time_max_accept')->nullable();
            $table->decimal('suggested_value_usd', 4, 1)->nullable();
            $table->string('sector')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('upload_exercises', function (Blueprint $table) {
            $table->dropColumn('time_max_accept');
            $table->dropColumn('suggested_value_usd');
            $table->dropColumn('sector');
        });
    }
};
