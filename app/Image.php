<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'path',
        'address',
        'user_name'
    ];
}
