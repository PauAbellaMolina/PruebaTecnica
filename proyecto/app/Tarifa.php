<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    protected $fillable = [
        'id_prod', 'fecha_inicio', 'fecha_fin', 'precio'
    ];
}
