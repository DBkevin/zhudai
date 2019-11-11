@extends('m.layouts.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/list.css')}}">
@stop
@section('content')
 <div class="list-box">
        <div class="category-filter" id="categoryFilter">
            <ul>
                <li class="active"><a href="/product">默认排序</a></li>
                <li>
                    <label>销量</label>
                    <div class="sale-px">
                        <ul>
                            <li><a href="/product">销量由高到低</a></li>
                            <li><a href="/procuct">销量由低到高</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <label>价格</label>
                    <div class="sale-px">
                        <ul>
                            <li><a href="/product">价格由高到低</a></li>
                            <li><a href="/product">价格由低到高</a></li>
                        </ul>
                    </div>
                </li>
                <li>筛选</li>
            </ul>
        </div>
        <div class="list">
            @foreach ($products as $product)
            <a href="/product/{{$product->id}}" class="item">
                <div class="thumb">
                    <img class="lazy"
                        src="/storage/{{$product->images[0]}}">
                </div>
                <div class="desc">
                    <p title="{{$product->title}}">
                        <span class="content-tip">
                            @if ($product->type)
                                全新设备
                            @endif
                                非全新设备
                        </span>
                        {{$product->title}}
                    </p>
                    <span>
                        价格
                        <em>{{$product->price_num}}</em>
                    </span>
                </div>
            </a>
            @endforeach
        </div>
        {{$products->links() }}
    </div>
@stop
@section('scripts')
<script>
 $(".atz-search-panel .atz-tabs>.atz-tab>a").click(function () {
        $(this).addClass("active").siblings().removeClass("active");
        var index = $(this).index();
        $(".atz-search-panel .atz-panels>.atz-panel").hide();
        $(".atz-search-panel .atz-panels>.atz-panel").eq(index).show();
        if (index == 1) {
            var searchData = cookies.getCookie("atzmsearch_" + publicData.userData.userPhone);
            if (searchData) {
                try{
                    searchData = JSON.parse(searchData);
                }catch (e) {
                    searchData = [];
                }
                var str = "";
                $.each(searchData, function (k, v) {
                    if (k < 10) {
                        str += "<a href=\"/product/s=" + v + "\">" + v + "</a>";
                    }
                });
                $(".atz-search-panel .atz-panel .atz-history-search").html(str);
                searchData=null;
            }
        }
        index = null;
    });
 <script>
@stop