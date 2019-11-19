<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ProductSku;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $categories=Category::query()->where('is_directory',false)->get();
        $products = Product::query()->where('on_sale', true)->paginate(12);
        $brand=$products->pluck('brand');
        // 判断是否有提交 search 参数，如果有就赋值给 $search 变量
        // search 参数用来模糊搜索商品
        return view('products.index',['products'=>$products,'categories'=>$categories,'brand'=>$brand]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',['product'=>$product]);
    }

    public function showSku(Request $request){
        $id=$request->route('id');
        if($id){
            $sku=ProductSku::query()->where('id',$id)->first();
            return json_encode($sku);
        }else{
            return false;
        }
        
    }
}
