<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Guardar -> Post
//creación de una ruta para la pagina principal
Route::get('/', function () {
    return view('welcome');
});

// creacion de una ruta
Route::get('Bienvenido', function(){

    //creacion de datos
    $noticias = [
        [
            'id' => '1',
            'titulo' => 'Visita Pastoral',
            'descripcion' => 'Pastor distrital llega de Visita' ],
        [   'id' => '2',
            'titulo' => 'Visita Pastor Stanly',
            'descripcion' => 'Visita la U.',
        ]
    ];
        return view('noticia', ['noticias'=>$noticias] );
});

// creacion de una ruta capturando un varible en la URL
Route::get('Bienvenido/{id}', function($id){
    return $id;
});

// creacion de una ruta
Route::get('vista', function(){
    $listas = [
        [
            'id' => '1',
            'nombre' => 'Carla',
            'edad' => '17' ],
        [   'id' => '2',
            'nombre' => 'Olivia',
            'edad' => '25',
        ]
    ];
        return view('vista', ['listas'=>$listas] );

});
























// ruta para acceder la la informacion de la tabla productos
Route::get('/producto',[ProductoController::Class,'ObtenerProducto']);
