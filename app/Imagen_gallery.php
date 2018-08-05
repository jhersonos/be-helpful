<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen_gallery extends Model
{
    protected $fillable= [
        'file', 'type', 'status'
    ];
}
