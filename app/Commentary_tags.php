<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentary_tags extends Model
{
    protected $fillable= [
        'commentarys_id', 'tags_id',
    ];
}
