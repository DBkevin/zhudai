<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable=[
        'title',
        'type',
        'body',
        'on_type'
    ];
    protected $casts=[
        'on_type'=>'boolean',
    ];
}
