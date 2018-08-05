<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File_users extends Model
{
    protected $fillable= [
        'users_id', 'nombre', 'slug', 'descripcion',
        'telefono', 'direccion', 'web', 'facebook',
        'instagram', 'twitter',
    ];
}
