@extends('layouts.default')
@section('title','行业咨询')
@section('styles')
<link rel="stylesheet" href="{{asset('css/article.css')}}">
@endsection
@section('content')
<div class="atz-content">
    <div class="crembs">
        <a href="/">首页</a>&gt;<a href="/article/news/">媒体中心</a>&gt;<a class="atz-text-default">
       {{$new->title}}
        </a>
    </div>
    <div class="layout">
        <div class="atz-media-article" style="width: 100%;">
            <div class="atz-media-article-title">
                <h3>{{$new->title}}</h3>
                <div class="info clear">
                    <span class="datetime">{{$new->create_time}} </span>
                    <span class="viewcount">{{$new->views}}</span>
                    <div class="bdsharebuttonbox bdshare-button-style0-16">
                        <span>分享：</span>
                        <a href="#" class="tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a href="#" class="sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                        <a href="#" class="qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                        <a href="#" class="weixin" data-cmd="weixin" title="分享到微信"></a>
                    </div>
                </div>
            </div>
            <div class="atz-media-article-content">
                <!--文章内容-->
               {!!$new->body!!}
            </div>
        </div>
    </div>
</div>
@endsection