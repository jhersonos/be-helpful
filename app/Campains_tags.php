<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campains_tags extends Model
{
    protected $fillable =[
        'campains_id', 'tags_id',
    ];
}
