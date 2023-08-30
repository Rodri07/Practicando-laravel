<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductoController; // hacemos referencia la controlador producto
use App\Models\producto;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

// Ruta de Producto
//controllerProducto ruta para acceder la la informacion de la tabla productos
Route::get('/producto',[ProductoController::class,'ObtenerProducto']); // ruta para acceder al controlador producto



// RUTA DE LOGIN
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
