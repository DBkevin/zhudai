@extends('layouts.default')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/swiper.css') }}">
@stop
@section('content')
<div class="floor-nav">
    <a class="active" href="javascript:void(0);" rel="nofollow">
        <i>HOT</i>
        <em style="line-height:40px;">热销</em>
    </a>
    <a href="javascript:void(0);" rel="nofollow">
        <i>1F</i>
        <em>行政办公</em>
    </a>
    <a href="javascript:void(0);" rel="nofollow">
        <i>2F</i>
        <em>商务便携</em>
    </a>
    <a href="javascript:void(0);" rel="nofollow">
        <i>3F</i>
        <em>图形处理</em>
    </a>
    <a href="javascript:void(0);" rel="nofollow">
        <i>4F</i>
        <em>技术开发</em>
    </a>
    <a href="javascript:void(0);" rel="nofollow">
        <i>5F</i>
        <em>电竞专区</em>
    </a>
    <a href="javascript:void(0);" rel="nofollow">
        <i>6F</i>
        <em>机房网络</em>
    </a>
    <a href="javascript:void(0);" rel="nofollow">
        <i>7F</i>
        <em>配件区</em>
    </a>
</div>
<!--banner-->
<div class="atz-banner-swiper">
    <div class="swiper-container">
        <div class="swiper-wrapper" id="bannerIndex">
            <a href="https://www.aiterent.com/promotion/" class="swiper-slide" data-title="电商节"
                style="background-image:url('http://oss.aiterent.com/files/2019/10/1571128372509132.jpg'); background-color:'1';"></a>
            <a href="https://www.aiterent.com/product/1805170003" class="swiper-slide" data-title="ThinkPad X230 "
                style="background-image:url('http://oss.aiterent.com/files/2019/09/1567403356559181.jpg'); background-color:'2';"></a>
            <a href="https://www.aiterent.com/product/1805180003" class="swiper-slide" data-title="ThinkPad T430"
                style="background-image:url('http://oss.aiterent.com/files/2019/10/1572339084170733.jpg'); background-color:'2';"></a>
            <a href="https://www.aiterent.com/product/1809300003" class="swiper-slide" data-title="ThinkPad T440"
                style="background-image:url('http://oss.aiterent.com/files/2019/09/1567403270458658.jpg'); background-color:'3';"></a>
            <a href="/product/1904300001" class="swiper-slide" data-title="全新 麦本本 金麦6A"
                style="background-image:url('http://oss.aiterent.com/files/2019/09/1567403317182654.jpg'); background-color:'4';"></a>
            <a href="/product/1906140002" class="swiper-slide" data-title="超扬Y2150-036"
                style="background-image:url('http://oss.aiterent.com/files/2019/09/1567473805922211.jpg'); background-color:'5';"></a>
            <a href="https://www.aiterent.com/product/1907010001" class="swiper-slide" data-title="ThinkPad T430S 短租"
                style="background-image:url('http://oss.aiterent.com/files/2019/09/1567403527652176.jpg'); background-color:'6';"></a>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
<!--end-->
<!--hot-->

<div class="atz-hot-module" data-nav-type="0">
    <div class="layout">
        <div class="atz-title">
            <span>热销机型</span>
            <div style="display:none;">电脑</div>
            <em>
                <button class="prev swiper-button-disabled" style="margin-right: 20px;"></button>
                <button class="next"></button>
            </em>
        </div>
        <div class="atz-hot-swiper">
            <div class="swiper-container">
                <div class="swiper-wrapper" id="hot">
                    @foreach ($hots as $hot)
                    <a href="/product/{{$hot->id}}" class="swiper-slide">
                        <div>
                            <img src="/storage/{{$hot->images[0]}}" alt="{{$hot->title}}" title="{{$hot->title}}">
                            <h3>{{$hot->title}}</h3>
                            <span>
                                <i>{{$hot->price_num}}</i>元/月
                            </span>
                            </span>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="labels">
            <a class="ico_1" href="/product">
                <em></em>
                <span>免押租赁</span>
            </a>
            <a class="ico_2" href="/product">
                <em></em>
                <span>随租随还</span>
            </a>
            <a class="ico_3" href="/product">
                <em></em>
                <span>信用支付</span>
            </a>
            <a class="ico_4" href="/product">
                <em></em>
                <span>一台起租</span>
            </a>
            <a class="ico_5" href="/product">
                <em></em>
                <span>全程保修</span>
            </a>
            <a class="ico_6" href="/product">
                <em></em>
                <span>按月付租</span>
            </a>
            <a class="ico_7" href="/product">
                <em></em>
                <span>上门服务</span>
            </a>
        </div>
        <!--几层-->
        <div class="atz-floor-module">
            <div class="layout" id="env">
                 @foreach ($category2s as $items)
                 <div class="floor f1 clear" data-nav-type="1">
                     <div class="floor-title">
                        <span onclick="window.open('/product','_blank');">{{$items->catename}}</span>
                        <a href="/list/e1"><em>
                           {{$items->catename1}}| {{$items->catename2}}| {{$items->catename3}}
                        </em>
                       </a>
                        <div style="display:none;">
                            {{$items->catename}}
                        </div>
                        <a class="more" href="/product">更多</a>
                    </div>
                    <div class="floor-main">
                        <div class="atz-pl">
                            <a href="{{$items->cateurl}}"> <img alt="{{$items->cataname}}"
                                    data-original="/storage/{{$items->cateimg}}"
                                    src="/images/load.gif" style="display: inline;" /> </a>
                        </div>
                        <div class="atz-pr" id="pr_1">
                            @foreach ($items->products as $item)
                            <a href="/product/{{$item->id}}">
                                <div class="pic">
                                    <img alt="{{$item->title}}"
                                        src="/images/load.gif" class="lazy"
                                        data-original="/storage/{{$item->images[0]}}"
                                        style="display: inline;" />
                                </div>
                                <div class="info">
                                    <p>{{$item->title}}</p>
                                    <span> <i>{{$item->price_num}}元/月</i> </span>
                                    <strong>马上租赁</strong>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                 </div>
                 @endforeach
            </div>
            <div class="atz-partner-module">
                <div class="layout">
                    <div class="atz-title">
                        <span>合作伙伴</span>
                        <em> <button class="change" >换一换</button> </em>
                    </div>
                    <div class="partner clear">
                        <ul>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/05/08/d8bf7b20-9c67-44c9-96c8-2f821b76a323.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="EY" alt="EY" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/05/08/ee14d766-5bbf-43b8-b482-5975f3c3c44c.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="PWC" alt="PWC" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/11/26/03da4564-bb99-4203-9e2b-d9837c200372.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="58同城" alt="58同城" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/11/26/1bc9f67d-4ac4-44b4-bd17-c3c4f0b50059.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="联通" alt="联通" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/11/26/178777ba-7be9-4015-9e99-08603166ce64.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="高丝" alt="高丝" /></a> </li>
                            <li> <a><img src="http://oss.aiterent.com/files/2019/10/1571810209231496.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="上海海洋大学" alt="上海海洋大学" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/files/2019/07/1563955714475577.jpg?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="戴德梁行" alt="戴德梁行" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/files/2019/07/1563955714490237.jpg?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="上海市委" alt="上海市委" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/files/2019/07/1563955714489611.jpg?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="RoBoCup" alt="RoBoCup" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/files/2019/07/1563955714569887.jpg?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="全球创业周" alt="全球创业周" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/files/2019/07/1563955714597717.jpg?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="上海市人民政府" alt="上海市人民政府" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/files/2019/07/1563955714604833.jpg?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="浙江大学" alt="浙江大学" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/11/26/2d5e21da-902d-4f88-b99d-64ec828bf6ef.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="树根" alt="树根" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/11/26/c876afe7-9228-423e-9116-83b2b2e6cf00.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="通彩" alt="通彩" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/11/26/663fbd9f-d150-4a30-90b2-87e74d890e23.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="紫金计量" alt="紫金计量" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/11/26/accf8e80-0e8b-4f6f-a80c-ec9b857d6f4a.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="艾斯艾" alt="艾斯艾" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/04/26/ab5c3e6f-7528-4989-ba1f-6ea51ae06883.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="清华同方" alt="清华同方" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/04/26/1d3c1993-603c-4af7-b1b6-9510c2606b37.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="戴尔" alt="戴尔" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/04/27/02946e55-d787-4be0-993a-3cdf79901172.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="联想" alt="联想" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/04/26/4e99bcea-5e46-4a6c-97c5-041f9ec41312.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="惠普" alt="惠普" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/04/26/50d8c816-2b33-4485-868a-d9832d19ac94.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="华三" alt="华三" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/04/27/dcc60aa2-13b8-4bba-b172-6f7517321944.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120"
                                        title="思科" alt="思科" /></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="atz-credit-module">
                <div class="layout">
                    <div class="atz-title">
                        <span>征信机构</span>
                    </div>
                    <div class="credit clear">
                        <ul>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/05/14/d7679841-4b44-46a2-ba7c-9aaaad0af2f9.png"
                                        title="量富征信" alt="量富征信" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/04/28/21b0d6de-4bbe-412b-8de2-b4139cbfcb59.png"
                                        title="芝麻信用" alt="芝麻信用" /></a> </li>
                            <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/12/21/7294495e-fbd0-4d8a-896f-001449702457.png"
                                        title="雷达" alt="雷达" /></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end-->
@endsection
@section('scripts')
<script src="{{asset('js/swiper.min.js')}}"></script>
<script src="{{asset('js/lazyload.min.js')}}"></script>
<script src="{{asset('js/index.js')}}"></script>
@endsection