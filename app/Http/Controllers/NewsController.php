<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Product;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news=News::query()->paginate(12);
        $products=Product::query()->where('on_sale',true)->limit(6)->get();
        return view('news.index',['news'=>$news,'products'=>$products]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
        $new=News::query($news->id)->first();
        $next=News::query()->where("id",'>',$news->id)->first();
        $prev=News::query()->where('id','<',$news->id)->first();
        $products=Product::query()->where('on_sale',true)->limit(6)->get();
        return view('news.show',['new'=>$new,'next'=>$next,'prev'=>$prev,'products'=>$products]);
    }
}
