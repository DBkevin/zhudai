<?php

namespace App\Http\Controllers;

use App\Models\ArticleNew;
use Illuminate\Http\Request;

class ArticleNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=ArticleNew::query()->paginate(20);
        return view('articlenews.index',compact('news'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleNew  $articleNew
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleNew $articleNew)
    {
        //
        $new=ArticleNew::query($articleNew->id)->first();
        return view('articlenews.show',['new'=>$new]);
    }

}
