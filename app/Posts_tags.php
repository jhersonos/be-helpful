<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts_tags extends Model
{
    protected $fillable = [
        'posts_id', 'tags_id'
    ];
}
