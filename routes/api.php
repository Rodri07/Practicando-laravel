<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController; //agregamos la ruta del controlador que utilizaremos
use App\Http\Controllers\PublicacionController; //agregamos la ruta del controlador que utilizaremos
use App\Http\Controllers\ComentarioController; // agregamos la ruta del controlador que utilizaremos

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// definir la ruta en el archvio api para utilizar el controlador en este caso es ProductoController
Route::get('/products', [ProductoController::class, 'getProducto']); // ruta Api


// 1 Mostrar las 10 primeras publicaciones
Route::get('/ShowPublicaciones', [PublicacionController::class, 'ShowPublicaciones']);

// 2. Mostrar los primeros 10 comentario capturando el ID de publicacion
Route::get('/ComentarioDePublicciones', [PublicacionController::class, 'getComentariosDePublicaciones']);

// 3.- Insertar una publicacion mediante postman
Route::post('/NewPublicacion', [PublicacionController::class, 'InsertarPublicacion']);

// 4. Buscar una publiacion con el nombre de:
Route::post('/BuscarPorTitulo', [PublicacionController::class , 'BuscadorPublicaciones']);

// 5. Contar cuantos comentarios tiene la primera publicacion
Route::get('/ContarComentarioPrimeraPublicacion', [PublicacionController::class, 'CoundComentarioPrimerPublicacion']);

// 6. mediaten el Id comentario verificar a que publicacion corresponde
Route::post('/ComentariaAQPublicidadCorresponde', [PublicacionController::class, 'VerificarComentarioAQPublicidadCorresponde']);
