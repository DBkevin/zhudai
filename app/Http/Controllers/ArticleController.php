<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
        $new=Article::query()->where('id',$article->id)->first();
        $group_type1=Article::query()->where('type','租机说明')->get();
        $group_type2=Article::query()->where('type','客服中心')->get();
        $group_type3=Article::query()->where('type','常见问题')->get();
        $group_type4=Article::query()->where('type','售后服务')->get();
        $group_type5=Article::query()->where('type','支付问题')->get();
        $top=Article::query()->where('id',4)->first();
        return view('article.show',['new'=>$new,'group_type1'=>$group_type1,'group_type2'=>$group_type2,'group_type3'=>$group_type3,'group_type4'=>$group_type4,'group_type5'=>$group_type5,'top'=>$top]);
    }
    public function cooperation(){
        $new=Article::query()->where('id','3')->first();
        return view('article.about',['new'=>$new]);
    }
    public function concat(){
        $new=Article::query()->where('id','2')->first();
        return view('article.about',['new'=>$new]);
    }
     public function about(){
        $new=Article::query()->where('id','1')->first();
        return view('article.about',['new'=>$new]);
    }

   
}
