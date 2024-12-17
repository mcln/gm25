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
        Schema::table('subjects', function (Blueprint $table) {
            // Eliminar la relación existente con la tabla 'degrees'
            $table->dropForeign(['degree_id']);
            $table->dropColumn('degree_id');

            // Eliminar las columnas 'code' y 'year'
            $table->dropColumn(['code', 'year']);

            // Agregar la nueva relación con la tabla 'universities'
            $table->foreignId('university_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subjects', function (Blueprint $table) {
            // Revertir los cambios hechos en la migración 'up'
            
            // Eliminar la relación con la tabla 'universities'
            $table->dropForeign(['university_id']);
            $table->dropColumn('university_id');

            // Restaurar la relación con la tabla 'degrees'
            $table->unsignedBigInteger('degree_id')->nullable();
            $table->foreign('degree_id')
                  ->references('id')
                  ->on('degrees')
                  ->onDelete('set null')
                  ->onUpdate('set null');
            
            // Restaurar las columnas 'code' y 'year'
            $table->string('code');
            $table->date('year');
        });
    }
};
