<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //solo se abbiamo un nome in altra lingua
    // protected $table = 'articles';
    protected $fillable = [
        'title',
        'body',
        'slug',
        'location',
        'author',
        'published',
        'img'
    ];

}
