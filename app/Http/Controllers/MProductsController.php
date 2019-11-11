<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MProductsController extends Controller
{
    //
    public function index(){
        $products = Product::query()->where('on_sale', true)->simplePaginate(12);
        return view('m.products.index',['products'=>$products]);
    }
    public function show(Product $product){
         return view('m.products.show',['product'=>$product]);
    }
}
