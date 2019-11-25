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
        $categories = Category::query()->where('is_directory', false)->get();
        $long = $request->get('long');
        $type = $request->get('type');
        $is_k=$request->get('is_k');
        if ($long) {
            if ($long=="long") {
                $products=Product::where(function($query){
                    $query->where('on_sale','=',true)
                        ->where('long','=',true);
                })->paginate(16);
            } else if($long=="nolong"){
                  $products=Product::where(function($query){
                    $query->where('on_sale','=',true)
                        ->where('long','=',false);
                })->paginate(16);
            }
        }else if ($type) {
            if ($type == 'new') {
                 $products=Product::where(function($query){
                    $query->where('on_sale','=',true)
                        ->where('type','=',true);
                })->paginate(16);
            }
        } else if($type=="old"){
            $products=Product::where(function($query){
                    $query->where('on_sale','=',true)
                        ->where('type','=',false);
            })->paginate(16);
        }else if($is_k=="yes"){
             $products=Product::where(function($query){
                    $query->where('on_sale','=',true)
                        ->where('is_k','=',true);
            })->paginate(16);
        }
        else{
            $products=Product::where(function($query){
                    $query->where('on_sale','=',true);
            })->paginate(16);
        }
        $brand = Product::all()->pluck('brand');
        // 判断是否有提交 search 参数，如果有就赋值给 $search 变量
        // search 参数用来模糊搜索商品
        return view('products.index', ['products' => $products, 'categories' => $categories, 'brand' => $brand]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    public function showSku(Request $request)
    {
        $id = $request->route('id');
        if ($id) {
            $sku = ProductSku::query()->where('id', $id)->first();
            return json_encode($sku);
        } else {
            return false;
        }
    }
}
