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
        Schema::table('universities', function (Blueprint $table) {
            // 1. Eliminar la relación existente con la tabla 'addresses'
            $table->dropForeign(['address_id']);
            $table->dropColumn('address_id');

            // 2. Eliminar la columna 'campus'
            $table->dropColumn('campus');

            // 3. Agregar la relación con la tabla 'countries'
            $table->foreignId('country_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('universities', function (Blueprint $table) {
            // 1. Revertir la eliminación de la columna 'address_id'
            $table->unsignedBigInteger('address_id')->nullable(); 
            $table->foreign('address_id')
                  ->references('id')
                  ->on('addresses')
                  ->onDelete('set null')
                  ->onUpdate('set null');

            // 2. Revertir la eliminación de la columna 'campus'
            $table->string('campus');

            // 3. Revertir la adición de la columna 'country_id'
            $table->dropForeign(['country_id']);
            $table->dropColumn('country_id');
        });
    }
};
