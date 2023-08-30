<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // agregamos esta libreria que me permite interactuar con la base de datos
use Illuminate\Support\Str; // me permite agregar datos a la tabla;


class comentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Metodo para agregar datos a una tabla de forma aleatoria
        for($i = 0; $i < 11; $i++) // esta es la forma de declarar un bucle
        {
            DB::table('comentarios')->insert([
                'commentario'=> Str::random(7), // agregamos cadenas de 7 caracteres aleatorio
                'publicacion_id' => random_int(1,11), // agregamos enteros del 1 al 11 enteros aleatorios
            ]);
        }
    }
}
