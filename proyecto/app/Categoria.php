<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'codigo_categoria', 'nombre', 'descripcion',
    ];
}
