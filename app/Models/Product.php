<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //允许写入字段
    protected $fillbale=['title','description','attrbutes','brand','type','on_sale','images','price','options'];
    protected $casts=[
        'type'=>'boolean',
        'on_sale'=>'boolean',
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
     * 一对多关联sku表
     *
     * @return void
     */
    public function skus(){
        return $this->hasMany(ProductSku::class);
    }
}
