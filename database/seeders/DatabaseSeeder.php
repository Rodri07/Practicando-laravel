<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\publicacion;
use Illuminate\Database\Seeder;
use Database\Seeders\productosSeeder; // agregamos la referencia del productoSedeer

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

     //metodo para ejecutar el codigo de los archivos seeder
    public function run(): void
    {
        // logica para ejecutar el codigo del archivo productosSeeder.php
        // $this->call([
        //     productosSeeder::class
        // ]);

        // logica para ejecutar el codigo del archivo publicacionesSeeder.php
        $this->call([
            publicacionsSeeder::class
        ]);

        // logica para ejecutar el codigo del archivo comentariosSeeder.php
        $this->call([
            comentariosSeeder::class
        ]);
    }
}



// comando para ejecutar la siembra: php artisan db:seed --class=publicacionsSeeder
