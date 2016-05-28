<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'short_description',
        'content',
        'title',
        'user_id'
    ];
}
