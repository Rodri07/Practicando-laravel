<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Tabla Fuerte
     */
    public function up(): void //metodo para crear la tabla
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nombre'); // campo
            $table->decimal('precio_unitario', $precision = 8, $scale = 2); // campo
            $table->timestamps(); //created_ad updated_ad

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void // metodo para elimiar si existe la tabla
    {
        Schema::dropIfExists('productos');
    }
};
