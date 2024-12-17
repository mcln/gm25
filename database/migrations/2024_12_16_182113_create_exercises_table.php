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
        Schema::create('exercises', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('item_id')->nullable(); 
            $table->foreign('item_id') // Crea una restricción de clave foránea en la columna 'item_id'.
                  ->references('id') // Define la columna de la tabla 'users' a la que la columna 'item_id' hace referencia.
                  ->on('items') // Indica la tabla 'items' en la que se encuentra la columna de referencia.
                  ->onDelete('set null') // Si se elimina un registro en la tabla 'items' que tiene una coincidencia en la columna 'item_id', se eliminará automáticamente la fila correspondiente en la tabla actual de la migración.
                  ->onUpdate('cascade'); // Si se actualiza un registro en la tabla 'items' que tiene una coincidencia en la columna 'item_id', se actualizará automáticamente la fila correspondiente en la tabla actual de la migración.

            $table->string('slug')->unique();
            $table->string('active', 45);
            $table->unsignedInteger('order')->nullable()->limit(3);
            $table->unsignedInteger('view_count')->default(0);
            $table->unsignedInteger('likes')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
