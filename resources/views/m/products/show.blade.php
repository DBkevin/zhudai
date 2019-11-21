@extends('m.layouts.proinfo')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/productDetail_m.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/swiper3.css')}}">
@stop
@section('content')
<header id="header_gjprXFZK" atz-skin="primary" atz-pos="fixed">
    <a href="/" class="atz-back-button"></a>
    <span class="atz-header-title">商品详情</span>
</header>
<div class="atz-section product" block="true">
    <!--产品图片轮播-->
    <div class="atz-fluid" id="tonglanpaiban01">
        <div class="atz-container" container="extonglan">
            <div class="atz-customcode" id="customcode_2sXAW9sZ" atz-skin="black">
                <div class="atz-product-swiper">
                    <div class="swiper-container swiper-container-horizontal" id="product-banner">
                        <div class="swiper-wrapper" id="picList">
                            @foreach ($product->images as $item)
                            <div class="swiper-slide">
                                <img class="swiper-lazy swiper-lazy-loaded" alt="" src="/storage/{{$item}}">
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--产品标题、规格相关信息-->
    <div class="atz-fluid" id="tonglanpaiban02">
        <div class="atz-container">
            <div class="atz-customcode" id="customcode_2sXAW1sZ" atz-skin="black">
                <div class="atz-cchtml">
                    <div class="atz-product-info">
                        <div class="block" id="show_modal" data-id="4e56d408d6f44493ad2d003ac332bc3c" data-type="1"
                            data-holdp="1900" data-num="94" data-isnew="0">
                            <div class="title-info">
                                <span class="price-icon">月租金</span>
                                <span class="price-number">{{$product->price_num}}</span>
                                <i class="tag isNewDev" data-id="0">非全新设备</i>
                            </div>
                            <div class="product-title">
                                <span class="title">{{$product->title}}</span>
                                <span class="sale-title">本月特价中！如有特殊功能需求，请及时联系客服或您的客户经理。</span>
                            </div>
                        </div>
                        <div class="block">
                            <div class="show-box">
                                <div class="show-label">已选商品</div>
                                <div class="show-content">
                                    <div class="text">
                                        <span class="product-ibreif">{{$product->skus[0]->title}}</span>
                                        <span class="select-num">1</span>件
                                        <span class="isSelectService">可选服务</span>
                                    </div>
                                </div>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAHCAYAAAAf6f3xAAAAg0lEQVQoka3SOw4CIRQF0CNxK1auhN6YWc3Ez2pGe1iKhUuxsRgLTHgFydyGcDkh5IVdKQXOmHHAGzc8IOcMaq2ahL6Trt3jhKWBx2bfu2zEhzbhErx0DvoRH9pkHUEvW/ShTda597JFH9qEa3B4D/oRH9qEJya88Pmtk/9P0WbEh/YLz/cvBnnLvD4AAAAASUVORK5CYII="
                                    class="dots" id="ibhLook">
                            </div>
                        </div>
                        <div class="block isRentBox">
                            <div class="show-box">
                                <div class="show-label">租赁方式</div>
                                <div class="show-content" id="curRent">
                                    <p class="rent-text1">月租金<span
                                            class="rent-price color-default">{{$product->price_num}}</span>元 ,租期 <span
                                            class="color-default">24</span> 个月<em>固定周期</em></p>
                                    <p class="rent-text2">
                                        平均月租金：{{$product->price_num}}元
                                    </p>
                                </div>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAHCAYAAAAf6f3xAAAAg0lEQVQoka3SOw4CIRQF0CNxK1auhN6YWc3Ez2pGe1iKhUuxsRgLTHgFydyGcDkh5IVdKQXOmHHAGzc8IOcMaq2ahL6Trt3jhKWBx2bfu2zEhzbhErx0DvoRH9pkHUEvW/ShTda597JFH9qEa3B4D/oRH9qEJya88Pmtk/9P0WbEh/YLz/cvBnnLvD4AAAAASUVORK5CYII="
                                    class="dots" id="rentLook">
                            </div>
                        </div>

                        <div class="block isRentBox">
                            <dl class="dl-inline" id="bdateinput">
                                <dt>起租日期：</dt>
                                <dd>
                                    <input type="text" class="begin-date" id="beginDate" value="" readonly>
                                </dd>
                            </dl>
                            <dl class="dl-inline" id="hold">
                                <dt>押金：</dt>
                                <dd>
                                    <div class="pledge">
                                        <span>设备押金:
                                            <em id="bhold" holdprice="1900">
                                                {{$product->price}}
                                            </em>
                                        </span>
                                        <span>可免除押金:
                                            <em id="rhold">
                                                0.00
                                            </em>
                                        </span>
                                        <span>需支付押金:
                                            <em id="nhold">
                                                {{$product->price}}
                                            </em>
                                        </span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dd class="text-right">
                                    <div class="total-price" id="waymoney">
                                        <span>合计首期租金：</span>
                                        <em id="firstmoney">
                                            {{$product->price_num}}
                                        </em>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <!--配置modal-->
                        <div class="choose-module" id="ibhBox">
                            <div class="choose-module-container animated2 fadeOutDown">
                                <div class="close-configuration">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAOxJREFUeNqc078OgjAQBvB6IbiYuLu7sDu4uTuJm5vvoRETZnwEo4P6Gu59Iie/S46ENPTfNfmglPIL0Ouk67qlMaZBjsjP6FuJ3NkqcLghW2SKHJQwg2+kRuaEg5Ube+QlE7QgN0vy6Vcl7ILsNCQXGngU5A4NJuXAXtBFU+EgOIbG4CjoQ33wLAXkVgQWon/gIvAaWcTA0JsO4Vb6PdiGwBSU/2HljFWxcqOMOvzKuZbxMhcdW+XNYPGCMGUWdpMCU25hp8CUCSbBpACjMEnnkwkGYUafyE4B+uAHb9OT7GurAN0tvULOfwEGAC0YSe6J3TjUAAAAAElFTkSuQmCC"
                                        alt="">
                                </div>
                                <div class="choose-product">
                                    <img src="/storage/{{$product->images[0]}}" alt="">
                                    <div class="choose-product-right">
                                        <div class="price">
                                            <span class="price-number"> {{$product->price_num}}</span>
                                        </div>
                                        <div class="choosed-text">
                                            已选： <span class="product-ibreif">{{$product->skus[0]->title}}</span> <span
                                                class="select-num">1</span>件
                                            <span class="isSelectService">可选服务</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-box">
                                    <div class="border"></div>
                                </div>
                                <div id="outer-qbmwx" class="choose-container">
                                    <div id="inner-h2cyh">
                                        <div class="choose-box">
                                            <div class="label">选择商品：</div>
                                            <div class="item-box" id="config">
                                                @foreach ($product->skus as $item)
                                                <label><input checked="checked"
                                                        data-id="4e56d408d6f44493ad2d003ac332bc3c" ibh="0201808220001"
                                                        name="cf" type="radio"><span>{{$item->title}}</span></label>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="border-box">
                                            <div class="border"></div>
                                        </div>
                                        <div class="row">
                                            <div class="label">数量：</div>
                                            <div class="content right">
                                                <div class="count-box" id="numOp">
                                                    <button class="clac subtract">—</button>
                                                    <input maxlength="4" type="tel" class="count-input" value="1"
                                                        id="spinner">
                                                    <button class="clac add">＋</button>
                                                </div>
                                                库存数量：<span class="price-stock color-default"
                                                    id="istore">{{$product->skus[0]->stock}}</span>
                                            </div>
                                        </div>
                                        <div class="choose-box insurance-box" id="insuranceBox">
                                            <div class="label">增值保障</div>
                                            <div class="item-box">
                                                <div class="security" id="protect">
                                                    <label class="atz-checkbox-01">
                                                        <input type="checkbox" data-id="10" data-price="0" name="prot"
                                                            checked>
                                                        <span>标准保（免费）</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="choose-box inservice-box" id="inserviceBox">
                                            <div class="label">增值服务</div>
                                            <div class="item-box">
                                                <div class="security" id="service">
                                                    <label class="atz-checkbox-01 atz-checkbox-01-hover">
                                                        <input type="checkbox" data-id="13" pr="10" name="serv">
                                                        <span>软件预装(10/次/台)</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--租赁方式modal-->
                        <div class="choose-module" id="rentBox">
                            <div class="choose-module-container animated2 fadeOutUp">
                                <div class="close-configuration">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAOxJREFUeNqc078OgjAQBvB6IbiYuLu7sDu4uTuJm5vvoRETZnwEo4P6Gu59Iie/S46ENPTfNfmglPIL0Ouk67qlMaZBjsjP6FuJ3NkqcLghW2SKHJQwg2+kRuaEg5Ube+QlE7QgN0vy6Vcl7ILsNCQXGngU5A4NJuXAXtBFU+EgOIbG4CjoQ33wLAXkVgQWon/gIvAaWcTA0JsO4Vb6PdiGwBSU/2HljFWxcqOMOvzKuZbxMhcdW+XNYPGCMGUWdpMCU25hp8CUCSbBpACjMEnnkwkGYUafyE4B+uAHb9OT7GurAN0tvULOfwEGAC0YSe6J3TjUAAAAAElFTkSuQmCC"
                                        alt="">
                                </div>
                                <div class="repay-title">租赁方式</div>
                                <div id="outer-rent" class="choose-container">
                                    <div id="inner-rent">
                                        <div class="choose-box2" id="ways">
                                             <div class="item-box">
                                                <label>
                                                    <input checked="checked" data-price="{{$product->skus[0]->type1_price}}" type="radio"  >
                                                    <p>
                                                        {{$product->skus[0]->type1}}
                                                      <em class="color-default">{{$product->skus[0]->type1_category}}</em>
                                                    </p>
                                                    <dl class="clear">
                                                        <dt>：{{$product->skus[0]->type1_category}}</dt>
                                                        <dd>
                                                            {{$product->skus[0]->type1descript}}
                                                        </dd>
                                                    </dl>
                                                </label>
                                            </div>
                                            @if ($product->skus[0]->type2)
                                             <div class="item-box">
                                                <label>
                                                    <input checked="checked" data-price="{{$product->skus[0]->type2_price}}"
                                                        type="radio"  >
                                                    <p>
                                                        {{$product->skus[0]->type2}}
                                                      <em class="color-default">{{$product->skus[0]->type2_category}}</em>
                                                    </p>
                                                    <dl class="clear">
                                                        <dt>：{{$product->skus[0]->type2_category}}</dt>
                                                        <dd>
                                                            {{$product->skus[0]->type2descript}}
                                                        </dd>
                                                    </dl>
                                                </label>
                                            </div>
                                            @endif
                                            @if ($product->skus[0]->type3)
                                             <div class="item-box">
                                                <label>
                                                    <input checked="checked" data-price="{{$product->skus[0]->type3_price}}"
                                                        type="radio"  >
                                                    <p>
                                                        {{$product->skus[0]->type3}}
                                                      <em class="color-default">{{$product->skus[0]->type3_category}}</em>
                                                    </p>
                                                    <dl class="clear">
                                                        <dt>：{{$product->skus[0]->type3_category}}</dt>
                                                        <dd>
                                                            {{$product->skus[0]->type3descript}}
                                                        </dd>
                                                    </dl>
                                                </label>
                                            </div>
                                            @endif
                                            @if ($product->skus[0]->type4)
                                             <div class="item-box">
                                                <label>
                                                    <input checked="checked" data-price="{{$product->skus[0]->type4_price}}"
                                                        type="radio"  >
                                                    <p>
                                                        {{$product->skus[0]->type4}}
                                                      <em class="color-default">{{$product->skus[0]->type4_category}}</em>
                                                    </p>
                                                    <dl class="clear">
                                                        <dt>：{{$product->skus[0]->type4_category}}</dt>
                                                        <dd>
                                                            {{$product->skus[0]->type4descript}}
                                                        </dd>
                                                    </dl>
                                                </label>
                                            </div>
                                            @endif
                                            @if ($product->skus[0]->type5)
                                             <div class="item-box">
                                                <label>
                                                    <input checked="checked"  data-price="{{$product->skus[0]->type5_price}}" type="radio"  >
                                                    <p>
                                                        {{$product->skus[0]->type5}}
                                                      <em class="color-default">{{$product->skus[0]->type_category}}</em>
                                                    </p>
                                                    <dl class="clear">
                                                        <dt>：{{$product->skus[0]->type5_category}}</dt>
                                                        <dd>
                                                            {{$product->skus[0]->type5descript}}
                                                        </dd>
                                                    </dl>
                                                </label>
                                            </div>
                                            @endif
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--产品详情、参数信息-->
    <div class="atz-fluid" id="tonglanpaiban03">
        <div class="atz-container" container="extonglan">
            <div class="atz-tabs-wrap" atz-tab="button" atz-type="horizontally" atz-skin="transparent"
                id="xuanxiangka_g5ZSZjM9">
                <div class="atz-tabs">
                    <div class="atz-tab active">
                        <span>商品详情</span>
                    </div>
                    <div class="atz-tab">
                        <span>商品参数</span>
                    </div>
                </div>
                <div class="atz-panels">
                    <div class="atz-panel active">
                        <div class="atz-customcode" id="customcode_0sXAW1sZ" atz-skin="black">
                            <div class="atz-cchtml">
                                <div class="context" id="context">
                                    <!--商品详情内容-->
                                    {!! $product->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="atz-panel">
                        <div class="atz-customcode" id="customcode_0sXAW1AZ" atz-skin="black">
                            <div class="atz-cchtml">
                                <div class="context" id="paramcontext">
                                    <!--商品参数内容-->
                                    {!! $product->attrbuite !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--表单-->
<div class="choose-module" id="ljzx">
    <div class="choose-module-container animated2 fadeOutDown">
        <div class="close-configuration">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAOxJREFUeNqc078OgjAQBvB6IbiYuLu7sDu4uTuJm5vvoRETZnwEo4P6Gu59Iie/S46ENPTfNfmglPIL0Ouk67qlMaZBjsjP6FuJ3NkqcLghW2SKHJQwg2+kRuaEg5Ube+QlE7QgN0vy6Vcl7ILsNCQXGngU5A4NJuXAXtBFU+EgOIbG4CjoQ33wLAXkVgQWon/gIvAaWcTA0JsO4Vb6PdiGwBSU/2HljFWxcqOMOvzKuZbxMhcdW+XNYPGCMGUWdpMCU25hp8CUCSbBpACjMEnnkwkGYUafyE4B+uAHb9OT7GurAN0tvULOfwEGAC0YSe6J3TjUAAAAAElFTkSuQmCC"
                alt="">
        </div>
        <div class="choose-product" style="padding-bottom:220px">
            <div class="choose-product-text">
                <ul>
                    <li>
                        <span>商品名称</span>
                        <input type="text" name="product_name" value="{{$product->title}}">
                    </li>
                    <li>
                        <span>您的姓名</span>
                        <input type="text" name="name" value="">
                    </li>
                    <li>
                        <span>您的电话</span>
                        <input type="text" name="phone" value="">
                    </li>
                </ul>
                <button class="ljtj" id="ljtj"
                    style="width:50%;height:30px;background:#ea5504;color:#fff; margin:0 auto; display:block ; ">
                    立即提交
                </button>
            </div>
        </div>

    </div>
</div>


<!--页尾 begin -->
<footer>
    <div class="total">
        <div class="buttons" id="zixun">
            <a href="/" class="button goindex">首页</a>
            <a href="javascript:void(0)" class="button gocart">购物车
                <i class="cartnum">0</i>
            </a>
            <a href="javascript:void(0);" class="button addcart addcartmain">立即咨询</a>
        </div>
    </div>
</footer>
@stop
@section('scripts')
<script src="{{asset('js/rolldate.min.js')}}"></script>
<script src="{{asset('js/swiper3.min.js')}}"></script>
<script>
    var swiper2 = new Swiper('#product-banner', {
        scrollbarHide: true,
        slidesPerView: 'auto',
        loop:true,
        lazyLoading : true,
        pagination : '.swiper-pagination',
    });
    $("#zixun").unbind("click").bind("click", function () {
        $("body").addClass("overHide");
        $("#ljzx").show();
        $("#ljzx>.choose-module-container").addClass("fadeInUp").removeClass("fadeOutDown");
    });
     $("#ljzx .close-configuration").unbind("click").bind("click", function () {
        $("body").removeClass("overHide");
        $("#ljzx").hide();
    });

    function navFixed() {
    $(window).scroll(function(){
        if($(this).scrollTop() >= ($("#tonglanpaiban03").position().top - 44)){
            $("#tonglanpaiban03 .atz-tabs").addClass("fixed");
        }else{
            $("#tonglanpaiban03 .atz-tabs").removeClass("fixed");
        }
    });
    $('#tonglanpaiban03 .atz-tabs .atz-tab').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
        $('#tonglanpaiban03 .atz-panels .atz-panel').removeClass("active");
        $('#tonglanpaiban03 .atz-panels .atz-panel').eq($(this).addClass("active").index()).addClass("active");
        $(window).scrollTop($("#tonglanpaiban03").position().top - 44);
    });
}
    $("#ibhLook").unbind("click").bind("click", function () {
        $("body").addClass("overHide");
        $("#ibhBox").show();
        $("#ibhBox>.choose-module-container").addClass("fadeInUp").removeClass("fadeOutDown");
    });
    $("#ibhBox .close-configuration").unbind("click").bind("click", function () {
        $("body").removeClass("overHide");
        $("#ibhBox>.choose-module-container").addClass("fadeOutDown").removeClass("fadeInUp");
        setTimeout(function () {
            $("#ibhBox").hide();
        }, 400)
    });
    $("#ljtj").unbind("click").bind("click", function () {
        var name = $("input[name='name']").val();
        var product_name = $("input[name='product_name']").val();
        var phone = $("input[name='phone']").val();
        $.ajax({
            headers:{
                'X-CSRF-TOKEN':"{{ csrf_token() }}"
            },
            url: "/msg",
            type: "POST",
            data: {
               product_name:product_name,
               name:name,
               phone:phone,
            },
            success: function(data) {
                //注册成功
                setTimeout(function(){
            $("body").removeClass("overHide");
            $("#ljzx>.choose-module-container").addClass("fadeOutDown").removeClass("fadeInUp");
            $("#ljzx").hide();
                },2000);
            }
        });
    });
    function setrentTime() {
    // 获取当前选中的租赁方式
    var wId = $("#ways label input:checked").attr("wid"),curTime=new Date(),minDate="",maxDate="";
    if (wId == 4) {
        curTime=new Date(new Date().getTime()+1000*60*60*24*1);
        minDate= curTime.getFullYear()+"-"+dateReg(curTime.getMonth()+1)+"-"+curTime.getDate();
    } else {
        /**三天后起租**/
        curTime=new Date(new Date().getTime()+1000*60*60*24*3);
        minDate= curTime.getFullYear()+"-"+dateReg(curTime.getMonth()+1)+"-"+curTime.getDate();
    }
    if (curTime.getMonth()>=11) {
        maxDate = (curTime.getFullYear()+1)+"-01"+"-"+curTime.getDate();
    } else {
        maxDate = curTime.getFullYear()+"-"+dateReg(curTime.getMonth()+2)+"-"+curTime.getDate();
    }
    $("#beginDate").val(minDate);
    /** 更新价格 **/

    function dateReg (date) {
        /**日期格式**/
        if (date<10) {
            date="0"+date;
        }
        return date;
    }
}
   $("#rentLook").unbind("click").bind("click", function () {
        $("body").addClass("overHide");
        $("#rentBox").show();
        $("#rentBox>.choose-module-container").addClass("fadeInUp").removeClass("fadeOutDown");
    });
       $("#rentBox .close-configuration").unbind("click").bind("click", function () {
        $("body").removeClass("overHide");
        $("#rentBox>.choose-module-container").addClass("fadeOutDown").removeClass("fadeInUp");
        setTimeout(function () {
            $("#rentBox").hide();
        }, 400)
    });
navFixed();
setrentTime() ;
</script>
@stop