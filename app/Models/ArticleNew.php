<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleNew extends Model
{
    //
    protected $fillable=[
        'title',
        'image',
        'body',
        'views',
    ];


}
