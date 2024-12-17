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
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id'); // Define la columna 'id' como una clave primaria autoincremental.

            // creamos la clave foranea
            // Crea una columna 'user_id' de tipo entero sin signo de 64 bits y garantiza que los valores en la columna sean únicos.
            $table->unsignedBigInteger('user_id')->unique(); 

            
            $table->foreign('user_id') // Crea una restricción de clave foránea en la columna 'user_id'.
                  ->references('id') // Define la columna de la tabla 'users' a la que la columna 'user_id' hace referencia.
                  ->on('users') // Indica la tabla 'users' en la que se encuentra la columna de referencia.
                  ->onDelete('cascade') // Si se elimina un registro en la tabla 'users' que tiene una coincidencia en la columna 'user_id', se eliminará automáticamente la fila correspondiente en la tabla actual de la migración.
                  ->onUpdate('cascade'); // Si se actualiza un registro en la tabla 'users' que tiene una coincidencia en la columna 'user_id', se actualizará automáticamente la fila correspondiente en la tabla actual de la migración.

            $table->unsignedBigInteger('commune_id')->nullable(); 

            $table->foreign('commune_id') 
                  ->references('id') 
                  ->on('communes') 
                  ->onDelete('set null') 
                  ->onUpdate('set null'); 

            $table->string('name', 45);
            $table->string('name2', 45)->nullable();
            $table->integer('street_number');
            $table->string('reference', 45)->nullable();
            $table->integer('postal_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
