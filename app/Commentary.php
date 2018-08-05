<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
    protected $fillable= [
        'users_id', 'commentary',
    ];
}
