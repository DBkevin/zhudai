<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category2 extends Model
{
    //
    protected $fillable=['catename','catename1','catename2','catename3','cateimg','cateurl'];

    /**
     * 一堆多关联商品表
     *
     * @return void
     */
    public function products(){
        return $this->hasMany(Product::class);
    }
}
