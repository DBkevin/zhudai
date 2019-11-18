@extends('layouts.default')
@section('title','行业咨询')
@section('styles')
<link rel="stylesheet" href="{{asset('css/article.css')}}">
@endsection
@section('content')
<div class="atz-content">
        <div class="crembs">
            <a href="/">首页</a>&gt;<a href="/news/">行业资讯</a>&gt;<a class="atz-text-default">
               {{$new->title}}
            </a>
        </div>
        <div class="layout clear">
            <div class="side-bar">
                <div class="side-product">
                    <h2 class="side-bar-title">热门推荐</h2>
                    <div class="side-product-content">
                        @foreach ($products as $product)
                    <dl class="side-product-item">
                        <dt>
                            <a href="/product/{{$product->id}}" target="_blank">
                                <img
                                    src="/storage/{{$product->images[0]}}"
                                    title="{{$product->title}}"> 
                            </a> 
                        </dt> 
                        <dd>
                            <h3>
                                <a href="/product/{{$product->id}}" target="_blank">
                                    {{$product->title}}
                                </a> 
                            </h3> 
                            <p>
                               月租金<em>{{$product->price_num}}</em>
                             </p>
                        </dd>
                    </dl>
                    @endforeach
                        <div class="side-bar-more">
                            <a href="/product" target="_blank">更多产品&nbsp;&nbsp;&gt;&gt;</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="atz-media-article">
                <div class="atz-media-article-title">
                    <h1>{{$new->title}}</h1>
                    <div class="info clear">
                        <span class="datetime">{{$new->crte_time}} </span>
                        <span class="viewcount">{{$new->views}}</span>
                        <div class="bdsharebuttonbox bdshare-button-style0-16">
                            <span>分享：</span>
                            <a class="tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a class="sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                            <a class="qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                            <a class="weixin" data-cmd="weixin" title="分享到微信"></a>
                        </div>
                    </div>
                </div>
                <div class="atz-media-article-content">
                    <!--文章内容-->
                    {!! $new->body !!}
                </div>
                <div class="atz-partOne" style="margin-top: 50px;padding: 20px;">
                    <div style="line-height: 28px;">
                        @if ($prev)
                            上一篇：<a href="/news/{{$prev->id}}">{{$prev->title}}</a>
                        @endif
                    </div>
                    <div style="line-height: 28px;">
                        @if ($next)
                            下一篇：<a href="/news/{{$next->id}}">{{$next->title}}</a>
                        @endif
                    </div>
                </div>
                <div class="atz-media-tag">
                    <span>标签：</span>
                    <a href="javascript:void(0)">{{$new->title}}</a>
                </div>
            </div>
        </div>
    </div>
@endsection