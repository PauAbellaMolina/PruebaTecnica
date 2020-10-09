<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategsProds extends Model
{
    protected $fillable = [
        'id_categ', 'id_prod'
    ];
}
