<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable=[
        'title',
        'images',
        'body',
        'views'
    ];

    public static function boot(){
        parent::boot();

        static::saving(function($model){
            $model->views=mt_rand(0,999);
        });
    }
}
