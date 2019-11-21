@extends('m.layouts.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/swiper3.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/index_m.css')}}">
@stop
@section('content')
<div class="atz-section" style="padding-bottom: 60px;">
    <div class="atz-banner-swiper">
        <div class="swiper-container swiper-container-horizontal">
            <div class="swiper-wrapper" id="bannerIndex">
                @foreach ($banners as $banner) 
                <a href="/product/{{$banner->id}}" class="swiper-slide" 
                    style="background-image:url('/storage/{{$banner->image}}'); background-color:'1';"></a>
                @endforeach
              
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="atz-fluid" id="tonglanpaiban_02">
        <div class="atz-container">
            <div class="atz-nav" atz-type="horizontal" atz-skin="white">
                <div class="atz-nav-item active">
                    <a href="/product">
                        <img src="/images/index_nav_01.png" alt="办公电脑租赁">
                        <span>办公电脑</span>
                    </a>
                </div>
                <div class="atz-nav-item ">
                    <a href="/product">
                        <img src="/images/index_nav_2.png" alt="办公设备">
                        <span>办公设备</span>
                    </a>
                </div>
                <div class="atz-nav-item ">
                    <a href="/product">
                        <img src="/images/index_nav_3.png" alt="机房建设">
                        <span>机房建设</span>
                    </a>
                </div>
                <div class="atz-nav-item ">
                    <a href="/product">
                        <img src="/images/index_nav_4.png" alt="增值服务">
                        <span>增值服务</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="atz-fluid" id="tonglanpaiban_0201">
        <div class="atz-container">
            <div class="atz-customcode" id="customcode_5H6QPxxx7" atz-skin="theme1">
                <div class="atz-cchtml">
                    <div class="atz-easy-title">
                        <span>企业轻松租机</span>
                    </div>
                    <div class="atz-easy-cell">
                        <div class="hd">
                            <span>
                                <b>1台起租</b>
                            </span>
                            <em></em>
                            <span>
                                <b>租金月结</b>
                            </span>
                            <em></em>
                            <span>
                                <b>企业免押金</b>
                                <div style="display:none;">租赁电脑</div>
                            </span>
                        </div>
                        <div class="bd">
                            <a href="javascript:void(0);" id="rentEasyOpen">我想租赁</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--热销机型-->
    <div class="atz-fluid" id="tonglanpaiban_03">
        <div class="atz-container">
            <div class="atz-customcode" id="customcode_5H6QPmx7" atz-skin="theme1">
                <div class="atz-cchtml">
                    <div class="atz-hot-title">
                        <span>热销机型</span>
                        <div style="display:none;">电脑</div>
                    </div>
                    <div class="atz-hot-swiper">
                        <div class="swiper-container swiper-container-horizontal">
                            <div class="swiper-wrapper" id="hot">
                                @foreach ($hots as $hot)
                                     <a href="/product/{{$hot->id}}" class="swiper-slide">
                                    <div>
                                        <img class="swiper-lazy" src="/images/load.gif"
                                            alt="{{$hot->title}}"
                                    data-src="/storage/{{$hot->images[0]}}"
                                            title="{{$hot->title}}"> <h3>{{$hot->title}}</h3>
                                        <span>
                                            <i>{{$hot->price_num}}元/月</i>
                                        </span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--行政办公-->
    <div class="atz-fluid" id="tonglanpaiban_04">
        <div class="atz-container">
            <div class="atz-customcode" id="env">
                @foreach ($category2s as $key=>$items)
                    <div class="floor f{{$key +1}} clear">
                    <div class="floor-title">
                        <a href="/product">{{$items->catename}}</a>
                    </div>
                    <div class="floor-main swiper-container" id="pr_1">
                        <div class="swiper-wrapper">
                            @foreach ($items->products as $item)
                                <a href="/product/{{$item->id}}" class="swiper-slide">
                                <div>
                                    <img class="swiper-lazy" src="/images/load.gif"
                                        data-src="/storage/{{$item->images[0]}}"
                                        alt="{{$item->title}}"
                                        title="{{$item->title}}"> <p>{{$item->title}}</p>
                                    <span>
                                        <i>{{$item->price_num}}元/月</i>
                                    </span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--联系我们-->
    <div class="atz-fluid" id="">
        <div class="atz-container">
            <div class="atz-customcode" id="cu" atz-skin="theme1">
                <a href="tel:4000778768" class="cua call-tel" data-agl-cvt="2">
                    <i class="icon"></i>
                    联系我们</a>
            </div>
        </div>
    </div>
    <table>

    </table>
    <!--关于我们-->
    <div class="atz-fluid">
        <dl class="aboutUs">
            <dt>关于<br />我们</dt>
            <dd>
                “艾特租”致力于打造国内首屈一指的IT设备租赁平台，目前在国内设立的售后服务网点超过200个（基本覆盖国内所有地级市），5年内服务超过十万家企业，艾特租隶属于上海魁马科技有限公司。
            </dd>
        </dl>
    </div>
</div>

@stop
@section('scripts')
<script src="{{ asset('js/swiper3.min.js') }}"></script>
<script src="{{asset('js/lazyload.min.js') }}"></script>
<script>
    $(".atz-search-panel header a.atz-back-button").click(function () {
        $(".atz-search-panel").hide();
        $(".atz-section").show();
    });
    $(".atz-header .atz-search-box[data-role='search']").click(function () {
        $(".atz-search-panel").show();
        $(".atz-section").hide();
        $("#searchparam").focus();
    });
    var vbs=new Swiper('.atz-banner-swiper .swiper-container', {
        speed: 500,
        autoplay: 5000,
        loop: true,
        autoplayDisableOnInteraction: false,
        pagination: '.atz-banner-swiper .swiper-pagination',
        paginationClickable: true
    });
    
    /**热销机型**/
    var vhs2 = new Swiper('.atz-hot-swiper .swiper-container', {
        slidesPerView: 2.5,
        spaceBetween: 5,
        slidesOffsetBefore: 5,
        slidesOffsetAfter : 5,
        paginationClickable: true,
        lazyLoading : true,
        pagination: '.atz-hot-swiper .swiper-pagination'
    });
    var swiper2 = new Swiper('#env .swiper-container', {
        scrollbar: '.swiper-scrollbar',
        scrollbarHide: true,
        slidesPerView: 'auto',
        grabCursor: true,
        lazyLoading : true,
        scrollbarDraggable : true,
        watchSlidesVisibility : true
    });
   
</script>
@endsection