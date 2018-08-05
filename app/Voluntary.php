<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntary extends Model
{
    protected $fillable = [
        'name', 'dni', 'especialidad', 'foto',
        'dni_scan', 'telefono', 'correo',
        'campains_id',
    ];
}
