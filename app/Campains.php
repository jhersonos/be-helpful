<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campains extends Model
{
    protected $fillable =[
        'users_id', 'nombre', 'slug', 'type', 'descripcion',
        'imagen_1', 'imagen_2', 'video', 'meta_don', 'n_vol',
        'n_cuenta', 'direccion'

    ];

    public function ong(){
        return $this->belongsTo(User::class);
    }
}
