<?php

namespace App\Http\Controllers; // copiar esta direccion a la ruta

use Illuminate\Http\Request;
use App\Models\eventos; // hacemos referencia la archivo models que estamos utlilizando
class EventosController extends Controller
{

    // En los controladores se crea la logica

    // metodo que hace referencia a la ruta que definimos
    // public function index()
    // {
    //     $eventos = [
    //         ['id' => '1',
    //         'titulo' => 'CiberSecurity',
    //         'descripcion' => ' Aprendera todo lo basico en redes'],
    //         ['id' => '2',
    //         'titulo' => 'Base de Datos',
    //         'descripcion' => 'Aprenderas como crear base de datos']
    //     ];
    //     return view('evento', ['eventos'=>$eventos]);
    // }

    public function index(){

        $evento = eventos::get();
        dd($evento);
        return view('evento', ['eventos'=>$evento]);

    }

}
