<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class ArticleNew extends Model
{
    //
    protected $fillable = [
        'title',
        'image',
        'body',
        'views',
    ];
    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if ($model->views == 0) {
                $model->views = mt_rand(1, 999);
            }
        });
    }
      public function getDescriptionAttribute(){
       return Str::limit(strip_tags($this->body),100);
    }
    public function getCrteTimeAttribute()
    {
        return Str::limit($this->created_at, 10, '');
    }
}
