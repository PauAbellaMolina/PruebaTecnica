<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'codigo_producto', 'nombre', 'descripcion', 'url_foto'
    ];
}
