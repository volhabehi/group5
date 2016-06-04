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

    public function tags()
    {
        return $this->belongsToMany(\App\Tag::class, 'articles_tags'); // В оригинале нужно указывать название моделей
    }

    public function getTagListAttribute()
    {
        return $this->tags()->lists('tag_id', 'tag_id')->all();
    }
}
