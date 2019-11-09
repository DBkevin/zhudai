<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Product extends Model
{
    //允许写入字段
    protected $fillbale=['title','description','attrbuite','brand','type','on_sale','images','price','options','hot'];
    protected $casts=[
        'type'=>'boolean',
        'on_sale'=>'boolean',
        'hot'=>'boolean',
    ];
    /**
     * 一对一关联category表
     *
     * @return void
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }
    /**
     * 一对一关联category2表
     *
     * @return void
     */
    public function category2(){
        return $this->belongsTo(Category2::class);
    }
    /**
     * 一对多关联sku表
     *
     * @return void
     */
    public function skus(){
        return $this->hasMany(ProductSku::class);
    }

    public function setImagesAttribute($images){
        if(is_array($images)){
            $this->attributes['images']=json_encode($images);
        }
    }
    public function getImagesAttribute($images){
        return json_decode($images,true);
    }
    public function getPriceNumAttribute($price){
        return intval($this->price /12 );
    }
}
