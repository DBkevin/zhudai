<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSku extends Model
{
    //允许写入字段
    protected $fillable=['title','price','stock','num',
        'type1',
        'type1_price',
        'type1category',
        'type1_category_info',
        'type1_descript',
        'type2',
        'type2_price',
        'type2category',
        'type2_category_info',
        'type2_descript',
        'type3',
        'type3_price',
        'type3category',
        'type3_category_info',
        'type3_descript',
        'type4',
        'type4_price',
        'type4category',
        'type4_category_info',
        'type4_descript',
        'type5',
        'type5_price',
        'type5category',
        'type5_category_info',
        'type5_descript',
    ];

    /**
     * 一对一关联product表
     *
     * @return void
     */
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
