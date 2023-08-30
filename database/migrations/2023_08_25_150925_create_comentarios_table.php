<?php

use App\Models\publicacion;
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
        Schema::create('comentarios', function (Blueprint $table) {

            // atributos de la tabla comentarios
            $table->id();
            $table->string("commentario");

            // condicion para que acepte valores unicos que existan en la tabla fuerte
            $table->unsignedBigInteger('publicacion_id');

            // creamos la llave foranea la cual hara referncia con el nombre
            $table->foreign('publicacion_id') // llave foranea publicacion:id
                    ->references('id') // id de referencia
                    ->on('publicacions') // de la tabla fuerte publicacions
                    ->onDelete('cascade'); // si se elimina algun dato que sea en cadena

            $table->timestamps(); // created_ad updated_ad
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
