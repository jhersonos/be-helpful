<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campains_posts extends Model
{
    protected $fillable =[
        'campains_id', 'texto',  'image',
    ];
}
