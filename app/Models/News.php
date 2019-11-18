<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
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
    public function getDescriptionAttribute(){
       return Str::limit(strip_tags($this->body),220);
    }
    public function getCrteTimeAttribute(){
        return Str::limit($this->created_at,10,'');
    }
}
