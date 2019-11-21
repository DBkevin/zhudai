@extends('layouts.default')
@section('title','商品列表')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/productList.css') }}">
@stop
@section('content')
<div class="atz-product-list">
    <div class="layout">
        <div class="filter clear">
            <div class="filter-title">
                <span>商品筛选</span>
            </div>
            <div class="filter-condition">
                <div class="item">
                    <span>分类：</span>
                    <div class="text-list" id="category">
                        <a href="/list/" class="text active" id="cat_all">不限</a>
                        @foreach ($categories as $category)
                            <a href="{{$category->id}}" class="text" data-id="c1" data-name="{{$category->name}}" title="{{$category->name}}">{{$category->name}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="item" id="brand">
                    <span>品牌：</span>
                    <a href="/product" class="text active" id="brand_all">不限</a>
                    <div class="brand-list">
                        @foreach ($brand as $item)
                            <a href="/product" class="text" >
                                {{$item}}
                            </a>
                        @endforeach
                        <!--<a href="/list/b1"
                            style="background-image:url(https://oss.aiterent.com/upload/10003427/2018/05/08/f6e436d0-4869-413b-9d69-3e7173d24ad5.png)"
                            class="brand" data-name="清华同方（THTF）" data-id="b1" title="清华同方（THTF）"></a>-->
                    </div>
                </div>
                <div class="item">
                    <span>租金范围：</span>
                    <div class="text-list" id="pricearea">
                        <a href="/product/" class="text active" id="pricearea_all">不限</a>
                        <a href="/product?p1" class="text" data-id="p1" title="￥0 - ￥99">￥0 - ￥99</a>
                        <a href="/product?p2" class="text" data-id="p2" title="￥100 - ￥199">￥100 - ￥199</a>
                        <a href="/product?p3" class="text" data-id="p3" title="￥200 - ￥299">￥200 - ￥299</a>
                        <a href="/product?p4" class="text" data-id="p4" title="￥300以上">￥300以上</a>
                    </div>
                </div>
                <div class="item">
                    <span>新旧属性：</span>
                    <div class="text-list" id="isnew">
                        <a href="/product/" class="text active" id="isnew_all">不限</a>
                        <a href="/product/a1" class="text" data-id="a1" id="isnew_1">全新设备</a>
                        <a href="/product/a2" class="text" data-id="a2" id="isnew_0">非全新设备</a>
                    </div>
                </div>
                <div class="item">
                    <span>租赁方式：</span>
                    <div class="text-list" id="rent">
                        <a href="/list/" class="text active" id="rent_all">不限</a>
                        <a href="/list/t1" class="text" data-id="t1" title="随租随还">随租随还</a>
                        <a href="/list/t2" class="text" data-id="t2" title="固定租期">固定租期</a>
                        <a href="/list/t3" class="text" data-id="t3" title="租完即送">租完即送</a>
                        <a href="/list/t5" class="text" data-id="t5" title="快速租赁">快速租赁</a>
                        <a href="/list/t6" class="text" data-id="t6" title="短期租赁">短期租赁</a>
                        <a href="/list/t4" class="text" data-id="t4" title="组合租赁">组合租赁</a>
                    </div>
                </div>
            </div>
            <div class="filter-sort">
                <div class="item" id="px">
                    <span>排序：</span>
                    <a href="/list/" class="text active" id="px_all">默认</a>
                    <a href="/list/o1" data-id="o1" class="text sort-down" id="px_down">销量由高到低</a>
                    <a href="/list/o2" data-id="o2" class="text sort-up" id="px_up">销量由低到高</a>
                    <a href="/list/o3" data-id="o3" class="text sort-down" id="px_downjg">价格由高到低</a>
                    <a href="/list/o4" data-id="o4" class="text sort-up" id="px_upjg">价格由低到高</a>
                </div>
            </div>
        </div>
        <div class="list clear" id="xspList">
           @foreach($products as $product)
            <a href="/product/{{$product->id}}" class="item" target="_blank">
                <div class="thumb">
                    <img class="lazy"
                        data-original="/storage/{{$product->images[0]}}"
                        src="/images/load.gif" title="{{$product->title}}"
                        alt="{{$product->title}}">
                </div>
                <div class="desc">
                    <p title="{{$product->title}}">{{$product->title}}</p><span>
                        月租金：
                        <em style="font-size:22px;">{{$product->skus[0]->type1_price}}</em></span>
                </div>
            </a>
           @endforeach
        </div>
        <div class="pagination" id="pageination" style="display: block;">
            {{ $products->onEachSide(5)->links()}}
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('js/lazyload.min.js')}}"></script>
<script>
    $("img.lazy").lazyload();
</script>
@endsection