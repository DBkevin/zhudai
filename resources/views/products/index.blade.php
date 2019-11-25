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
                        <a href="/product" class="text active" id="cat_all">不限</a>
                        @foreach ($categories as $category)
                        <a href="/product" class="text" data-id="c1" data-name="{{$category->name}}"
                            title="{{$category->name}}">{{$category->name}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="item" id="brand">
                    <span>品牌：</span>
                    <a href="/product" class="text active" id="brand_all">不限</a>
                    <div class="brand-list">
                        @foreach ($brand as $item)
                        <a href="/product?brand={{$item}}" class="text">
                            {{$item}}
                        </a>
                        @endforeach

                    </div>
                </div>
                <div class="item">
                    <span>租金范围：</span>
                    <div class="text-list" id="pricearea">
                        <a href="/product/" class="text active" id="pricearea_all">不限</a>
                        <a href="/product" class="text" data-id="p1" title="￥0 - ￥99">￥0 - ￥99</a>
                        <a href="/product" class="text" data-id="p2" title="￥100 - ￥199">￥100 - ￥199</a>
                        <a href="/product" class="text" data-id="p3" title="￥200 - ￥299">￥200 - ￥299</a>
                        <a href="/product" class="text" data-id="p4" title="￥300以上">￥300以上</a>
                    </div>
                </div>
                <div class="item">
                    <span>新旧属性：</span>
                    <div class="text-list" id="isnew">
                        <a href="/product/" class="text active" id="isnew_all">不限</a>
                        <a href="/product?type=new" class="text" data-id="a1" id="isnew_1">全新设备</a>
                        <a href="/product?type=old" class="text" data-id="a2" id="isnew_0">非全新设备</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="list clear" id="xspList">
            @if ($products ==null)
                
            <H3>没有符合条件的商品</H3>
            @endif
            @foreach($products as $product)
            <a href="/product/{{$product->id}}" class="item" target="_blank">
                <div class="thumb">
                    <img class="lazy" data-original="/storage/{{$product->images[0]}}" src="/images/load.gif"
                        title="{{$product->title}}" alt="{{$product->title}}">
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