<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicacion extends Model
{
    use HasFactory;


    // ENTIDAD - RELACIÓN
    // este metodo hace referencia a la migracion de la tabla debil comentario
    public function comentarios()
    {
        // 1 a M uno a muchos esta relacion nos direcciona al archivo
        // model de comentario.
        return $this->hasMany(comentario::class);
    }
}
