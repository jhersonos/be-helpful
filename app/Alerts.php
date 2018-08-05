<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerts extends Model
{
    protected $fillable = [
        'users_id','latitud', 'longitud', 'ip', 'audio',
        'video', 'foto', 'texto',
    ];
}
