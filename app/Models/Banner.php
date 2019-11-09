<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $fillbale=['name','image','on_sale','url'];
    
    protected $casts=[
        'on_sale'=>'boolean',
    ];
}
