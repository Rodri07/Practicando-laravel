<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto; //

class ProductoController extends Controller
{


    public function ObtenerProducto(Request $request)
    {
        //$eventos = Noticias::find(1)->eventos;
        $Producto=producto::get();
        return view('vistaProducto',['Producto'=>$Producto]);
        //dd($eventos);
    }
}
