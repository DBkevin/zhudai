<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSku extends Model
{
    //
    /**
     * 一对一关联product表
     *
     * @return void
     */
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
