<?php

namespace App\Http\Controllers;

use App\Models\comentario;
use App\Models\publicacion; // agregamos el modelo que vamos a utilizar para interacturar con la BD
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    //1 Metodo para obtener los 10 primeros datos de la tabla publicaciones
    public function ShowPublicaciones()
    {
        $publicacion=publicacion::all()->take(10);
        return Response()->json($publicacion);
    }

    // 2 Metodo para Mostrar los primeros 10 comentario capturando el ID de publicacion
    public function getComentariosDePublicaciones()
    {
        // obtenemos las 10 ultimas publicaciones
        $publicaciones = publicacion::take(10)->get();

    // este arreglo nos permite almacenar la informacion sobre los comentarios de publicaciones
       $comentarioDePublicacion = [];

    //Se inicia un bucle foreach para iterar a través de cada una de las publicaciones obtenidas
        foreach ($publicaciones as $publicacion) {
            //se obtienen los últimos 10 comentarios de la publicación actual
            $comentarios = $publicacion->comentarios()->take(10)->get();

        // Se construye un arreglo  asociativo que contiene la información de la publicación y sus comentarios.
        //El arreglo se agrega al arreglo principal $comentarioDePublicacion
            $comentarioDePublicacion[] = [
                'publicacion_id' => $publicacion->id,
                'noticias' => $comentarios,
            ];
        }
        return response()->json($comentarioDePublicacion); // retorna un json
    }

    // 3 Metodo para Insertar una publicacion mediante postman
    public function InsertarPublicacion(Request $request)
    {
        $datosTabla = $request -> all(); // obtenemos todos los atributos de la tabla

        $publicaciones = new publicacion(); // hacemos una instancia
        $publicaciones->id = $datosTabla['id']; // insertamos los datos
        $publicaciones->nombre = $datosTabla['nombre']; // insertamos los datos

        $publicaciones->save(); // salvamos el registro

        return response()->json(['menssage' => 'Publicación registrada exitosamente']);
    }

    // 4. Metodo para Buscar una publiacion con el nombre de
    public function BuscadorPublicaciones(Request $request)
    {
        $titulo = $request->input('nombre');

        if($titulo)
        {
            $publicacionEncontrada = publicacion::where('nombre','like', '%' . $titulo . '%')->get();

            if($publicacionEncontrada->isEmpty())
            {
                return response()->json(['mensage' => 'No se encontro el titulo de la publicación']);
            }
            return response()->json(['publicacions' => $publicacionEncontrada]);
        }
        return response()->json(['menssage' => 'Se requiere un título para buscar la publicacion']);
    }

    // 5. Metodo para Contar cuantos comentarios tiene la primera publicacion
    public function CoundComentarioPrimerPublicacion()
    {
        $PrimeraPublicacion = publicacion::orderBy('id', 'asc')->first();

        if (!$PrimeraPublicacion) {
            return response()->json(['message' => 'No se encontraron Publicaciones']);
        }

        $CantidadComentariosPrimeraPublicacion = $PrimeraPublicacion->comentarios()->count();
        return response()->json(['Cantidad Comentario de la Primera Publicacion' => $CantidadComentariosPrimeraPublicacion]);
    }

    // 6. Metodo mediaten el Id comentario verificar a que publicacion corresponde
    public function VerificarComentarioAQPublicidadCorresponde(Request $request)
    {
        $id_comentario = $request->input('id');

        if(!$id_comentario)
        {
            return response()->json(['message' => 'Se requiere el ID de la publicidad']);
        }

        $comentario = comentario::find($id_comentario);

        if(!$comentario)
        {
            return response()->json(['message' => 'No se encontro la publicidad']);
        }

        $publicacionRelacinada = $comentario->publicacion;

        if(!$publicacionRelacinada)
        {
            return response()->json(['message' => 'El comentario no esta relacionado con ninguna publicación']);
        }

        return response()->json(['Publicación Relacionada' => $publicacionRelacinada]);
    }
}
