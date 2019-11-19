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
 public static function boot(){
        parent::boot();

        static::saving(function($model){
            if($model->views==0){
                $model->views=mt_rand(1,999);
            }
        });
    }

}
