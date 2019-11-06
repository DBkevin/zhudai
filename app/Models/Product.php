<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
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
