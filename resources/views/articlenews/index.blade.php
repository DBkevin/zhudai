@extends('layouts.default')
@section('title','行业咨询')
@section('styles')
<link rel="stylesheet" href="{{asset('css/article.css')}}">
<style>
        .layui-layer-title{
            font-size: 16px !important;
        }
        #wx-box{
            display: none;
        }
        #wx-box #wxCode{
            text-align: center;
            padding: 20px;
        }
        #wx-box .wx-box-foot{
            padding: 20px;
            font-size: 12px;
        }
        .atz-content .atz-article-content.atz-media-list{
            padding: 40px 20px;
        }
    </style>
@endsection
@section('content')
      <div class="atz-content">
        <div class="layout">
            <!--左侧栏目-->
            <div class="atz-menu">
                <strong>关于惠趣租</strong>
                <div class="group">
                    <a artid="1" href="/article/about" class="">公司概况</a>
                    <a artid="7" href="/article/concat" class="">联系我们</a>
                    <a artid="6" href="/article/news/" class="active">媒体中心</a>
                    <a artid="6" href="/news/" class="">行业资讯</a>
                    <a artid="3" href="/article/cooperation" class="">商务合作</a>
                </div>
            </div>
            <div class="atz-article">
                <div class="atz-article-content atz-media-list">
                    <div style="text-align: center; padding: 0 0 30px 0;">
                        <h1 style="font-size: 28px; font-weight: normal; color: #333;">媒体中心</h1>
                        <h5 style="font-size: 16px; font-weight: normal; color: #666;">MEDIA CENTER</h5>
                    </div>
                    <!--列表-->
                    @foreach ($news as $item)
                     <div class="item clear">
                        <div class="describe">
                            <h3><a href="/article/news/{{$item->id}}" target="_blank">{{$item->title}}</a></h3>
                            <div class="info clear">
                                <span class="datetime">{{$item->crte_time}}</span>
                                <span class="viewcount">{{$item->views}}</span>
                                <div class="bdsharebuttonbox bdshare-button-style0-16" data-id="{{$item->id}}"
                                    data-title="{{$item->title}}">
                                    <span>分享：</span>
                                    <a href="#" class="tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                                    <a href="#" class="sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                                    <a href="#" class="qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                                    <a href="#" class="weixin" data-cmd="weixin" title="分享到微信"></a>
                                </div>
                            </div>
                        </div>
                        <div class="pic">
                            <a href="/article/news/{{$item->id}}" target="_blank">
                                <img src="/storage/{{$item->image}}" alt="">
                            </a>
                            <h5>{{$item->title}}</h5>
                        </div>
                        <p><span class="arc_desc">{{$item->description}}。</span>
                            <a href="/article/news/{{$item->id}}" class="more" target="_blank">查看全文》</a>
                        </p>
                    </div>
                    @endforeach
                    {{$news->links()}}
                </div>
            </div>
        </div>
    </div>

@stop