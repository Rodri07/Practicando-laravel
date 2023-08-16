<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    use HasFactory;


    // relacion de 1 a N (inversa)
    public function productos()
    {
        //muchos proveedores tiene un prducto
        return $this->belongsTo('App\Models\producto');
    }

}
