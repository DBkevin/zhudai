@extends('layouts.default')
@section('title','行业咨询')
@section('styles')
<link rel="stylesheet" href="{{asset('css/article.css')}}">

@endsection
@section('content')
<div class="atz-content">
    <div class="crembs">
        <a href="/">首页</a>&gt;<a class="atz-text-default">
            行业资讯
        </a>
    </div>
    <div class="layout clear">
        <!--左侧栏目-->
        <div class="atz-article">
            <div class="atz-article-content atz-media-list">
                <!--列表-->
                @foreach ($news as $new)
                <div class="item clear">
                    <div class="describe">
                        <h3><a href="/news/{{$new->id}}" target="_blank">{{$new->title}}</a><span
                                class="datetime">{{$new->crte_time}}</span></h3>
                    </div>
                    <p>
                        <span class="arc_desc">
                            {{ $new->description }}
                      </span>
                    <a href="/news/{{$new->id}}" class="more" target="_blank">查看全文》</a>
                    </p>
                </div>
                @endforeach
            </div>
            {{$news->links()}}
        </div>
        <!--右侧-->
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
            <div class="side-tag">
                <h2 class="side-bar-title">热门标签</h2>
                <div class="side-product-content">
                    <a href="/tag/837">惠趣租</a>
                    <a href="/tag/1096">广州电脑租赁</a>
                    <a href="/tag/1124">大连租智能电视</a>
                    <a href="/tag/1131">杭州电脑租赁</a>
                    <a href="/tag/1150">合肥电脑租赁</a>
                    <a href="/tag/1157">广东租赁手机</a>
                    <a href="/tag/1168">电视租赁</a>
                    <a href="/tag/1181">iPad租赁</a>
                    <a href="/tag/1197">湖北租赁电脑</a>
                    <a href="/tag/1071">上海电脑租赁</a>
                    <a href="/tag/1098">武汉电脑租赁</a>
                    <a href="/tag/1125">江苏打印机租赁</a>
                    <a href="/tag/1143">重庆电脑租赁</a>
                    <a href="/tag/1151">苏州电脑租赁</a>
                    <a href="/tag/1159">电脑租赁</a>
                    <a href="/tag/1173">联想电脑租赁</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection