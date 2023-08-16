<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;


    // Relacion de 1 a N
    public function proveedors()
    {
        // relacion un prducto tiene muchos proveedores
        return $this->hasMany('App\Models\proveedor');
    }
}



