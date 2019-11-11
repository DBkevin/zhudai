<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category2;
use App\Models\Banner;

class MindexController extends Controller
{
 
    public function index(){
        $hots=Product::query()->where('hot',true)->where('on_sale',true)->get();
        $category2s=Category2::with('products')->get();
        $banners=Banner::query()->where('on_sale',true)->get();
        return view('m/index',['hots'=>$hots,'category2s'=>$category2s,'banners'=>$banners]);
    }
}
