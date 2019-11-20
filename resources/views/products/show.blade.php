@extends('layouts.default')
@section('title',$product->title.'详情')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/productDetail.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/layer.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/layui.css') }}">
@stop
@section('content')
<div class="atz-product-detail">
    <div class="layout">
        <div class="detail clear">
            <div class="atz-pl">
                <div class="thumbnail" id="magnifier">
                    <div class="small-box">
                        <!--商品图片-->
                        <img id="smallPic"
                            src="/storage/{{$product->images[0]}}"
                            alt="{{$product->title}}">
                        <span class="hover"></span>
                    </div>
                    <div class="thumbnail-box">
                        <a class="btn btn-prev" href="javascript:;"></a>
                        <a class="btn btn-next" href="javascript:;"></a>
                        <div class="list">
                            <ul class="wrapper" id="picList">
                                <!--配置小图-->
                                @foreach ($product->images as $item)
                                    <li class="item"
                                    data-src="/storage/{{$item}}"
                                    data-src2="/storage/{{$item}}">
                                    <img src="/storage/{{$item}}"
                                    alt="{{$product->title}}">
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="big-box">
                        <img id="bigPic"
                            src="/storage/{{$product->images[0]}}"
                            alt="{{$product->title}}">
                    </div>
                </div>
                <div class="service-ft clear" id="plbot">
                    <div class="service-ft-thumb clear">
                        <ul id="plbotpic"></ul>
                    </div>
                    <div class="service-ft-text clear" id="plbottxt"></div>
                </div>
            </div>
            <div class="atz-pr">
                <div class="basic">
                    <h3 class="title">{{$product->title}} <span id="skus_title">{{$product->skus[0]->title}}</span></h3>
                    <h5 class="sale-title">如有特殊功能需求请及时联系客服或您的客户经理。</h5>
                    <div class="price">
                        <em>月租金：</em>
                        <span>
                            {{$product->skus[0]->type1_price}}
                        </span>
                        <i class="tag" data-id="0">
                            @if($product->type==1)
                               全新设备
                            @else
                              非全新设备
                            @endif
                        </i>
                    </div>
                </div>
                <div class="condition">
                    <dl id="config">
                        <dt>选择配置：</dt>
                        <dd class="config-tag">
                            <!--配置属性-->
                            @foreach ($product->skus as $key=>$item)
                                @if ($key==0)
                                <label class="atz-radio-01 sku">
                                <input checked="checked" data-id="{{$item->id}}" ibh="{{$item->id}}"
                                    name="cf" type="radio">
                                    <span><img src="/storage/{{$product->images[0]}}" />
                                       {{$item->title}}
                                    </span>
                                </label>
                                @else
                                <label class="atz-radio-01 sku">
                                <input data-id="{{$item->id}}" ibh="{{$item->id}}"
                                    name="cf" type="radio">
                                    <span><img src="/storage/{{$product->images[0]}}" />
                                       {{$item->title}}
                                    </span>
                                </label>
                                @endif
                            @endforeach
                           
                        </dd>
                    </dl>
                    <dl id="proservice">
                        <dt>增值保障：</dt>
                        <!--保障内容-->
                        <i id="protect">
                            <label class="atz-checkbox-01">
                                <input type="checkbox" checked="checked" data-id="10" name="prot">
                                <span>标准保</span>
                            </label>
                        </i>
                        </dd>
                    </dl>
                    @if ($product->options)
                    <dl id="iservice">
                        <dt>增值服务：</dt>
                        <dd>
                            <i id="service">
                                <!--服务-->
                                <label class="atz-checkbox-01 atz-checkbox-01-hover">
                                    <input type="checkbox" data-id="13" pr="10" name="serv">
                                    <span>软件预装(10元/月)</span></label>
                            </i>
                        </dd>
                    </dl>
                    @endif
                    <dl id="ways">
                        <dt>租赁方式：</dt>
                        <dd>
                             <div class="atz-radio-bar atz-radio-bar-default">
                                <label class="atz-radio">
                                    <input checked="checked" data-id="4528" name="c" pid="185" type="radio" data-price="{{$product->skus[0]->type1_price}}" value="185">
                                    <span>{{$product->skus[0]->type1}}</span>
                                </label>
                                <i class="tag tag_1">{{$product->skus[0]->type1category}}</i>
                                <em class="tips">
                                    {{$product->skus[0]->type1_descript}}
                                </em>
                            </div>
                            @if ($product->skus[0]->type2)
                                <div class="atz-radio-bar ">
                                <label class="atz-radio">
                                    <input data-id="4528" name="c" pid="185" type="radio" value="185" data-price="{{$product->skus[0]->type2_price}}" >
                                    <span>{{$product->skus[0]->type2}}</span>
                                </label>
                                <i class="tag tag_1">{{$product->skus[0]->type2category}}</i>
                                <em class="tips">
                                    {{$product->skus[0]->type2_descript}}
                                </em>
                                </div>
                            @endif
                             @if ($product->skus[0]->type3)
                                <div class="atz-radio-bar ">
                                <label class="atz-radio">
                                    <input data-id="4528" name="c" pid="185" type="radio" value="185"  data-price="{{$product->skus[0]->type3_price}}">
                                    <span>{{$product->skus[0]->type3}}</span>
                                </label>
                                <i class="tag tag_1">{{$product->skus[0]->type3category}}</i>
                                <em class="tips">
                                    {{$product->skus[0]->type3_descript}}
                                </em>
                                </div>
                            @endif
                             @if ($product->skus[0]->type4)
                                <div class="atz-radio-bar ">
                                <label class="atz-radio">
                                    <input  data-id="4528" name="c" pid="185" type="radio" value="185"  data-price="{{$product->skus[0]->type4_price}}">
                                    <span>{{$product->skus[0]->type4}}</span>
                                </label>
                                <i class="tag tag_1">{{$product->skus[0]->type4category}}</i>
                                <em class="tips">
                                    {{$product->skus[0]->type4_descript}}
                                </em>
                                </div>
                            @endif
                             @if ($product->skus[0]->type5)
                                <div class="atz-radio-bar ">
                                <label class="atz-radio">
                                    <input data-id="4528" name="c" pid="185" type="radio" value="185"  data-price="{{$product->skus[0]->type5_price}}">
                                    <span>{{$product->skus[0]->type5}}</span>
                                </label>
                                <i class="tag tag_1">{{$product->skus[0]->type5category}}</i>
                                <em class="tips">
                                    {{$product->skus[0]->type5_descript}}
                                </em>
                                </div>
                            @endif
                           
                            <div class="atz-more-bar"><a href="javascript:void(0);" id="atz-more-bar" >更多租赁方式请联系</a></div>
                            
                        </dd>
                    </dl>

                    <dl id="bdateinput">
                        <dt>起租日期：</dt>
                        <dd>
                            <input class="begin-date" id="beginDate" readonly="" type="text" data-time="" value="">
                            <input class="begin-date" id="beginDate2" readonly="" style="display:none;" type="text"
                                value="">
                        </dd>
                    </dl>
                    <dl>
                        <dt>数量：</dt>
                        <dd>
                            <div class="spinner"><button class="decrease"></button><input class="value" id="spinner"
                                    maxlength="4" value="1" type="text"><button class="increase"></button></div>
                            <dfn class="nostore warn">库存数量：<b id="istore">{{$product->skus[0]->stock}}</b></dfn>
                        </dd>

                    </dl>
                    <dl id="hold">
                        <dt>押金：</dt>
                        <dd>
                            <div class="pledge">
                                <span>设备押金:
                                    <em id="bhold">
                                       {{$product->skus[0]->price}}
                                    </em>
                                </span>
                                <span>可免除押金:
                                    <em id="rhold">0.00 </em>
                                </span>
                                <span>需支付押金:
                                    <em id="nhold">
                                       {{$product->skus[0]->price}}
                                    </em>
                                </span>
                                <a class="promote" href="javascript:void(0)">具体额度请咨询</a>
                            </div>
                        </dd>
                    </dl>
                </div>

                <div class="total">
                    <div class="total-price" id="waymoney">
                        <span>合计首期租金：</span>
                        <em id="firstmoney">
                            {{$product->skus[0]->type1_price}}
                        </em>
                        (估算，具体请咨询)
                    </div>
                    <div class="buttons">
                        <a class="button once" href="javascript:void(0);" id="zixun">
                            立即咨询
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="group clear" id="attach">
        </div>
        <div class="info clear">
            <div class="tabs">
                <div class="buttons">
                    <a class="active" href="javascript:void(0);">商品详情</a>
                    <a href="javascript:void(0);">商品参数</a>
                </div>
                <div class="panels">
                    <div class="panel active">
                        <div class="context" id="context">
                            {!! $product->description !!}
                        </div>
                    </div>
                    <div class="panel" id="paramcontext">
                        <div class="context">
                            <!--商品参数内容-->
                            {!! $product->attrbuite !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--表单-->
<div id="add-main" style="display: none;">
       <form class="layui-form" id="add-form" action="">
         <div class="layui-form-item center "  style="magrin-top:20px;">
          <label class="layui-form-label" style="width: 100px" >商品名称</label>
          <div class="layui-input-block">
          <input type="text" name="product_name" required value="{{$product->title}}" style="width: 240px" lay-verify="required" placeholder="请输入配置名称" autocomplete="off" class="layui-input">
          </div>
         </div>
         <div class="layui-form-item">
          <label class="layui-form-label" style="width: 100px">您的姓名</label>
          <div class="layui-input-block">
           <input type="text" name="name" required style="width: 240px" lay-verify="required" placeholder="请输入您的姓名" autocomplete="off" class="layui-input">
          </div>
         </div>
         <div class="layui-form-item">
          <label class="layui-form-label" style="width: 100px">您的电话 </label>
          <div class="layui-input-block">
           <input type="text" name="phone" required style="width: 240px" lay-verify="required" placeholder="请输入您的电话" autocomplete="off" class="layui-input">
          </div>
         </div>
         <div class="layui-form-item">
          <div class="layui-input-block">
           <a class="layui-btn" id="ljtx" href="javascript:void(0);">立即提交</a>
           <button type="reset" class="layui-btn layui-btn-primary" id="closeBtn" >重置</button>
          </div>
         </div> 
       </form>  
    </div>
@stop
@section('scripts')
<script src="{{asset('js/magnifier.js')}}"></script>
<script src="{{asset('js/laydate.min.js')}}"></script>
<script src="{{asset('js/product.js')}}"></script>
<script>
 $('#zixun').on('click', function(){
    layer.open({
      type: 1,
      area: ['600px', '360px'],
      shadeClose: true, //点击遮罩关闭
      content: $("#add-main"),
    });
  });
$('#ljtx').on('click',function(){
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
                layer.msg('提交成功！');//保存成功提示
                setTimeout(function(){
                layer.closeAll();//关闭弹窗
                },2000);
            }
        });
    });
     $( " dd .atz-more-bar").find("a").unbind("click").bind("click",
        function() {
            $( ".atz-radio-bar").is(":hidden") ? ($( " .atz-radio-bar").show(), $(this).text("收起")) : ($( " .atz-radio-bar").eq(0).siblings(".atz-radio-bar").hide(), $(" .atz-more-bar>a").text("查看更多租赁方式"))
        })
    $('.atz-radio-01 ').on('click', function(){
    $.ajax({
        url:'/sku/'+$('.atz-radio-01 input').attr('data-id'),
        type:'get',
        success:function(sku){
            var jsons=JSON.parse(sku);
            console.dir(jsons);
            console.log(jsons['price']);
        }
    });
  });
</script>
@endsection