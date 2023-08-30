<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto; //definicion del archivo models su ruta
use GuzzleHttp\Psr7\Response;

class ProductoController extends Controller
{
    //Metodo para obtener los datos de la base de datos
    public function ObtenerProducto(Request $request)
    {
        $Producto=producto::get();
        return view('vistaProducto',['Producto'=>$Producto]);
    }

    // creamos el metodo getproducto
    public function getProducto ()
    {
        $produc = producto::all()->take(10); // creamos la variable y hacemos referencia al modelo
        return Response()->json($produc);
    }
}
