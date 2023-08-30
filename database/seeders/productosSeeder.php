<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // agregamos la referencia de la libreria DB
use Illuminate\Support\Str; // agregamos la referencia de la libreria STR

class productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // bucle para agregar datos random a los productos
        for($i = 0 ; $i < 2; $i++)
        {
            DB::table('productos')->insert([
                'nombre' => Str::random(5),
                'precio_unitario' => random_int(0,100),
            ]);
        }
    }
}
