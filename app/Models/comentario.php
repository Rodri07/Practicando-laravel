<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{
    use HasFactory;


    // 1 a M (INVERSA) hacemos la relacion inversa de la tabla
    // comentario a publicaciones
    public function publicacion()
    {
        return $this->belongsTo(publicacion::class);
    }
}
