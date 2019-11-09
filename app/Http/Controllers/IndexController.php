<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category2;
use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    //
    public function index(){
        $hots=Product::query()->where('hot',true)->where('on_sale',true)->get();
        $category2s=Category2::with('products')->get();
        $banners=Banner::query()->where('on_sale',true)->get();
        return view('welcome',['hots'=>$hots,'category2s'=>$category2s,'banners'=>$banners]);
    }
}
