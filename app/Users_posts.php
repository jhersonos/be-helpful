<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_posts extends Model
{
    protected $fillable = [
        'users_id', 'nombre', 'slug', 'texto',
    ];
}
