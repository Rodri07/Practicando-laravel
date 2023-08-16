<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * ENTIDAD DEBIL
     */
    public function up(): void
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id(); // primary key
            $table->string('nombre',25); // campo
            $table->string('direccion'); // campo

            // ENTIDAD - RELACION N
            $table->unsignedBigInteger('id_producto')->unique(); // llave foranea de producto unico

            // esto acepta solos las llaves primarias que existan en la tabla producto
            // que hacen referncia en caso de no existan no habra un registro
            // tambien hacemos referencia al metodo cascade para eliminar datos a escala
            $table->foreign('id_producto')// nombre de llave foranea asignada
                    ->references('id') // referencia del id
                    ->on('productos') // de la tabla productos
                    ->onDelete('cascade'); // que los datos se eliminen en cadena

            $table->timestamps(); // created_ad updated_ad
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};
