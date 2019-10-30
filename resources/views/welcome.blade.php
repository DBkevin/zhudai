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
            <a href="https://www.aiterent.com/promotion/" target="_blank" class="swiper-slide" data-title="电商节"
                style="background-image:url('http://oss.aiterent.com/files/2019/10/1571128372509132.jpg'); background-color:'1';"></a>
            <a href="https://www.aiterent.com/product/1805170003" target="_blank" class="swiper-slide"
                data-title="ThinkPad X230 "
                style="background-image:url('http://oss.aiterent.com/files/2019/09/1567403356559181.jpg'); background-color:'2';"></a>
            <a href="https://www.aiterent.com/product/1805180003" target="_blank" class="swiper-slide"
                data-title="ThinkPad T430"
                style="background-image:url('http://oss.aiterent.com/files/2019/10/1572339084170733.jpg'); background-color:'2';"></a>
            <a href="https://www.aiterent.com/product/1809300003" target="_blank" class="swiper-slide"
                data-title="ThinkPad T440"
                style="background-image:url('http://oss.aiterent.com/files/2019/09/1567403270458658.jpg'); background-color:'3';"></a>
            <a href="/product/1904300001" target="_blank" class="swiper-slide" data-title="全新 麦本本 金麦6A"
                style="background-image:url('http://oss.aiterent.com/files/2019/09/1567403317182654.jpg'); background-color:'4';"></a>
            <a href="/product/1906140002" target="_blank" class="swiper-slide" data-title="超扬Y2150-036"
                style="background-image:url('http://oss.aiterent.com/files/2019/09/1567473805922211.jpg'); background-color:'5';"></a>
            <a href="https://www.aiterent.com/product/1907010001" target="_blank" class="swiper-slide"
                data-title="ThinkPad T430S 短租"
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
                    <a href="/product/1808220001" target="_blank" class="swiper-slide">
                        <div>
                            <img src="https://oss.aiterent.com/upload/10003427/2018/08/22/b18499f9-3757-4847-9c0c-39ff3cf6fce3_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_140,h_140"
                                alt="ThinkPad T420 笔记本电脑（i5/4GB/128GB SSD/14"/集显）"
                                title="ThinkPad T420 笔记本电脑（i5/4GB/128GB SSD/14"/集显）"> <h3>ThinkPad T420
                            笔记本电脑（i5/4GB/128GB SSD/14"/集显）</h3>
                            <span>
                                <i>78</i>元/月
                            </span>
                            </span>
                        </div>
                    </a>
                    <a href="/product/1904300001" target="_blank" class="swiper-slide">
                        <div>
                            <img src="https://oss.aiterent.com/upload/10003427/2019/04/30/a1a21a46-354c-4a3f-a182-268e206a53c3_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_140,h_140"
                                alt="全新 麦本本 金麦6A 笔记本电脑（赛扬N4000/8GB/128GB SSD/UHD 600/13.3" ）"
                                title="全新 麦本本 金麦6A 笔记本电脑（赛扬N4000/8GB/128GB SSD/UHD 600/13.3" ）">
                            <h3>全新 麦本本 金麦6A 笔记本电脑（赛扬N4000/8GB/128GB SSD/UHD 600/13.3"）</h3>
                            <span>
                                <i>101</i>元/月
                            </span>
                            </span>
                        </div>
                    </a>
                    <a href="/product/1804200004" target="_blank" class="swiper-slide">
                        <div>
                            <img src="https://oss.aiterent.com/upload/10003427/2018/05/18/150182ef-8507-490a-9db1-809ba42815ed_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_140,h_140"
                                alt="ThinkPad X230 笔记本电脑（i5/4GB/128GB SSD/12.5"/集显）"
                                title="ThinkPad X230 笔记本电脑（i5/4GB/128GB SSD/12.5"/集显）"> <h3>ThinkPad X230
                            笔记本电脑（i5/4GB/128GB SSD/12.5"/集显）</h3>
                            <span>
                                <i>76</i>元/月
                            </span>
                            </span>
                        </div>
                    </a>
                    <a href="/product/1901070001" target="_blank" class="swiper-slide">
                        <div>
                            <img src="https://oss.aiterent.com/upload/10003427/2019/01/07/a4e0afb7-a737-497e-873f-2ac9606b9162_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_140,h_140"
                                alt="ThinkPad T430 笔记本电脑（i5/4GB/128GB SSD/14"/集显）"
                                title="ThinkPad T430 笔记本电脑（i5/4GB/128GB SSD/14"/集显）"> <h3>ThinkPad T430
                            笔记本电脑（i5/4GB/128GB SSD/14"/集显）</h3>
                            <span>
                                <i>82</i>元/月
                            </span>
                            </span>
                        </div>
                    </a>
                    <a href="/product/1808210005" target="_blank" class="swiper-slide">
                        <div>
                            <img src="https://oss.aiterent.com/upload/10003427/2018/08/21/cfa2cfe2-1b55-4fbd-8146-580a3ed21365_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_140,h_140"
                                alt="全新 清华同方（THTF）T43U 笔记本电脑（i3-7100U/4GB/1T/14"/集显）"
                                title="全新 清华同方（THTF）T43U 笔记本电脑（i3-7100U/4GB/1T/14"/集显）"> <h3>全新 清华同方（THTF）T43U
                            笔记本电脑（i3-7100U/4GB/1T/14"/集显）</h3>
                            <span>
                                <i>135</i>元/月
                            </span>
                            </span>
                        </div>
                    </a>
                    <a href="/product/1809110001" target="_blank" class="swiper-slide">
                        <div>
                            <img src="https://oss.aiterent.com/upload/10003427/2018/09/11/ebfa9bc3-ac93-4c4a-8add-a771249613d4_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_140,h_140"
                                alt="ThinkPad T420 笔记本电脑（i5/8GB/128GB SSD/14"/集显）"
                                title="ThinkPad T420 笔记本电脑（i5/8GB/128GB SSD/14"/集显）"> <h3>ThinkPad T420
                            笔记本电脑（i5/8GB/128GB SSD/14"/集显）</h3>
                            <span>
                                <i>88</i>元/月
                            </span>
                            </span>
                        </div>
                    </a>
                    <a href="/product/1806200002" target="_blank" class="swiper-slide">
                        <div>
                            <img src="https://oss.aiterent.com/upload/10003427/2018/06/20/2fcfb793-6338-41c6-b48f-12ddbda8e736_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_140,h_140"
                                alt="全新 机械革命(MECHREVO) S1 笔记本电脑（i5-8250U/8GB/256G SSD/14"/2G独显）"
                                title="全新 机械革命(MECHREVO) S1 笔记本电脑（i5-8250U/8GB/256G SSD/14"/2G独显）"> <h3>全新
                            机械革命(MECHREVO) S1 笔记本电脑（i5-8250U/8GB/256G SSD/14"/2G独显）</h3>
                            <span>
                                <i>225</i>元/月
                            </span>
                            </span>
                        </div>
                    </a>
                    <a href="/product/1809140001" target="_blank" class="swiper-slide">
                        <div>
                            <img src="https://oss.aiterent.com/upload/10003427/2018/11/19/7052af2e-1ab5-4547-8443-bf2bed3c5ca4_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_140,h_140"
                                alt="全新 清华同方THTF P7 超扬Y2150-076 商用办公台式机（双核G4900/4GB/1TB SATA/Win10H/19.53" ）"
                                title="全新 清华同方THTF P7 超扬Y2150-076 商用办公台式机（双核G4900/4GB/1TB SATA/Win10H/19.53" ）">
                            <h3>全新 清华同方THTF P7 超扬Y2150-076 商用办公台式机（双核G4900/4GB/1TB SATA/Win10H/19.53"）</h3>
                            <span>
                                <i>99</i>元/月
                            </span>
                            </span>
                        </div>
                    </a>
                    <a href="/product/1804210003" target="_blank" class="swiper-slide">
                        <div>
                            <img src="https://oss.aiterent.com/upload/10003427/2018/05/18/67710133-b3d5-466e-b3d2-6f0eb9f25913_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_140,h_140"
                                alt="ThinkPad X240 笔记本电脑（i5/4GB/128GB SSD/12.5"/核显）"
                                title="ThinkPad X240 笔记本电脑（i5/4GB/128GB SSD/12.5"/核显）"> <h3>ThinkPad X240
                            笔记本电脑（i5/4GB/128GB SSD/12.5"/核显）</h3>
                            <span>
                                <i>113</i>元/月
                            </span>
                            </span>
                        </div>
                    </a>
                    <a href="/product/1808140007" target="_blank" class="swiper-slide">
                        <div>
                            <img src="https://oss.aiterent.com/upload/10003427/2018/11/19/890b7845-c7c6-4009-a312-2cc6191b620c_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_140,h_140"
                                alt="全新 清华同方THTF P7 超扬Y2150-036商用办公台式机（四核i3-8100/4GB/1TB SATA/Win10H/19.53" WLED液晶显示器）"
                                title="全新 清华同方THTF P7 超扬Y2150-036商用办公台式机（四核i3-8100/4GB/1TB SATA/Win10H/19.53"
                                WLED液晶显示器）">
                            <h3>全新 清华同方THTF P7 超扬Y2150-036商用办公台式机（四核i3-8100/4GB/1TB SATA/Win10H/19.53"WLED液晶显示器）</h3>
                            <span>
                                <i>109</i>元/月
                            </span>
                            </span>
                        </div>
                    </a>
                    <a href="/product/1804270034" target="_blank" class="swiper-slide">
                        <div>
                            <img src="https://oss.aiterent.com/upload/10003427/2018/04/27/7a34141a-ed99-401f-b1b1-c6f40ce3e93d_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_140,h_140"
                                alt="全新 苹果Apple MacBook Air 笔记本电脑（i5-1.8GHz/8GB/128G SSD/Intel HD6000/13.3"/集显）"
                                title="全新 苹果Apple MacBook Air 笔记本电脑（i5-1.8GHz/8GB/128G SSD/Intel HD6000/13.3"/集显）">
                                <h3>全新 苹果Apple MacBook Air 笔记本电脑（i5-1.8GHz/8GB/128G SSD/Intel HD6000/13.3"/集显）</h3>
                            <span>
                                <i>262</i>元/月
                            </span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="labels">
            <a class="ico_1" href="/article/8" target="_blank">
                <em></em>
                <span>免押租赁</span>
            </a>
            <a class="ico_2" href="/article/11" target="_blank">
                <em></em>
                <span>随租随还</span>
            </a>
            <a class="ico_3" href="/article/37" target="_blank">
                <em></em>
                <span>信用支付</span>
            </a>
            <a class="ico_4" href="/article/11" target="_blank">
                <em></em>
                <span>一台起租</span>
            </a>
            <a class="ico_5" href="/article/20" target="_blank">
                <em></em>
                <span>全程保修</span>
            </a>
            <a class="ico_6" href="/article/10" target="_blank">
                <em></em>
                <span>按月付租</span>
            </a>
            <a class="ico_7" href="/article/43" target="_blank">
                <em></em>
                <span>上门服务</span>
            </a>
        </div>
        <!--几层-->
        <div class="atz-floor-module"> 
    <div class="layout" id="env"> 
     <div class="floor f1 clear" data-nav-type="1"> 
      <div class="floor-title"> 
       <span onclick="window.open('/list/e1','_blank');">行政办公</span> 
       <a href="/list/e1" target="_blank"><em>前台 | 行政 | 人事</em></a> 
       <div style="display:none;">
        办公电脑
       </div> 
       <a class="more" href="/list/e1" target="_blank">更多</a> 
      </div> 
      <div class="floor-main"> 
       <div class="atz-pl"> 
        <a href="http://www.aiterent.com/product/1906140001" target="_blank"> <img alt="行政办公电脑租赁" data-original="https://oss.aiterent.com/group1/M00/00/0C/rKgABV0IUCGAZCDvAAKXlVCJ6Xs992.png" src="https://www.aiterent.com/images/load.gif" style="display: inline;" /> </a> 
       </div> 
       <div class="atz-pr" id="pr_1"> 
        <a href="/product/1901070001" target="_blank"> 
         <div class="pic"> 
          <img alt="ThinkPad T430 笔记本电脑（i5/4GB/128GB SSD/14" 显）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2019/01/07/a4e0afb7-a737-497e-873f-2ac9606b9162_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>ThinkPad T430 笔记本电脑（i5/4GB/128GB SSD/14&quot;/集显）</p> 
          <span> <i>82元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1906140002" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 清华同方THTF P7 超扬Y2150-036商用办公主机（四核i3-8100/4GB/1TB SATA/Win10H）" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/group1/M00/00/0A/rKgABV0DT4KAQLC3AAImnD2t160697.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 清华同方THTF P7 超扬Y2150-036商用办公主机（四核i3-8100/4GB/1TB SATA/Win10H）</p> 
          <span> <i>95元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1904300001" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 麦本本 金麦6A 笔记本电脑（赛扬N4000/8GB/128GB SSD/UHD 600/13.3" ）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2019/04/30/a1a21a46-354c-4a3f-a182-268e206a53c3_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 麦本本 金麦6A 笔记本电脑（赛扬N4000/8GB/128GB SSD/UHD 600/13.3&quot;）</p> 
          <span> <i>101元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1804210007" target="_blank"> 
         <div class="pic"> 
          <img alt="ThinkPad T520 笔记本电脑（i5/4GB/128GB SSD/15.6" 显卡）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/04/26/c5b74617-fda4-4edf-ae68-ad9184a163f4_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>ThinkPad T520 笔记本电脑（i5/4GB/128GB SSD/15.6&quot;/双显卡）</p> 
          <span> <i>95元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1808220001" target="_blank"> 
         <div class="pic"> 
          <img alt="ThinkPad T420 笔记本电脑（i5/4GB/128GB SSD/14" 显）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/08/22/b18499f9-3757-4847-9c0c-39ff3cf6fce3_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>ThinkPad T420 笔记本电脑（i5/4GB/128GB SSD/14&quot;/集显）</p> 
          <span> <i>78元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1804210027" target="_blank"> 
         <div class="pic"> 
          <img alt="苹果Apple Pro A1278 笔记本电脑（i5/4GB/500G/13.3" 显）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/05/23/37d795f4-496a-447c-bfe1-5b1bdb6cadc1_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>苹果Apple Pro A1278 笔记本电脑（i5/4GB/500G/13.3&quot;/集显）</p> 
          <span> <i>135元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
       </div> 
      </div> 
     </div> 
     <div class="floor f1 clear" data-nav-type="1"> 
      <div class="floor-title"> 
       <span onclick="window.open('/list/e2','_blank');">商务便携</span> 
       <a href="/list/e2" target="_blank"><em>会议 | 差旅 | 销售</em></a> 
       <div style="display:none;">
        笔记本租用
       </div> 
       <a class="more" href="/list/e2" target="_blank">更多</a> 
      </div> 
      <div class="floor-main"> 
       <div class="atz-pl"> 
        <a href="http://www.aiterent.com/product/1811130001" target="_blank"> <img alt="商务便携式电脑租赁" data-original="https://oss.aiterent.com/group1/M00/00/1B/rKgABV0ZoseAKheMAAFnO2NrCwU071.png" src="https://www.aiterent.com/images/load.gif" style="display: inline;" /> </a> 
       </div> 
       <div class="atz-pr" id="pr_1"> 
        <a href="/product/1804200004" target="_blank"> 
         <div class="pic"> 
          <img alt="ThinkPad X230 笔记本电脑（i5/4GB/128GB SSD/12.5" 显）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/05/18/150182ef-8507-490a-9db1-809ba42815ed_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>ThinkPad X230 笔记本电脑（i5/4GB/128GB SSD/12.5&quot;/集显）</p> 
          <span> <i>76元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1806200002" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 机械革命(MECHREVO) S1 笔记本电脑（i5-8250U/8GB/256G SSD/14" g独显）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/06/20/2fcfb793-6338-41c6-b48f-12ddbda8e736_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 机械革命(MECHREVO) S1 笔记本电脑（i5-8250U/8GB/256G SSD/14&quot;/2G独显）</p> 
          <span> <i>225元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1904300005" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 联想ThinkPad E490 笔记本电脑（i5-8265U/8GB/500GB HDD/Win10H/14" 显rx550="" 2g="" d）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2019/04/30/78208966-d37a-4d8d-9d62-486b4c748e74_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 联想ThinkPad E490 笔记本电脑（i5-8265U/8GB/500GB HDD/Win10H/14&quot;/独显RX550 2G/HD）</p> 
          <span> <i>236元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1809300002" target="_blank"> 
         <div class="pic"> 
          <img alt="ThinkPad T440 笔记本电脑（i5/4GB/500GB/14" 显）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/12/21/52078f44-9588-4ed2-af74-2b771bdfded6_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>ThinkPad T440 笔记本电脑（i5/4GB/500GB/14&quot;/集显）</p> 
          <span> <i>113元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1904300001" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 麦本本 金麦6A 笔记本电脑（赛扬N4000/8GB/128GB SSD/UHD 600/13.3" ）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2019/04/30/a1a21a46-354c-4a3f-a182-268e206a53c3_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 麦本本 金麦6A 笔记本电脑（赛扬N4000/8GB/128GB SSD/UHD 600/13.3&quot;）</p> 
          <span> <i>101元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1812280007" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 Microsoft Surface Go 超级本（intel 4415Y/8G/10" 28gb="" in10h="" 不含键盘="" 控笔）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2019/01/02/137d5be8-c5ed-4e09-894a-bb7f17edbe77_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 Microsoft Surface Go 超级本（intel 4415Y/8G/10&quot;/128GB/Win10H 不含键盘/触控笔）</p> 
          <span> <i>213元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
       </div> 
      </div> 
     </div> 
     <div class="floor f1 clear" data-nav-type="1"> 
      <div class="floor-title"> 
       <span onclick="window.open('/list/e3','_blank');">图形处理</span> 
       <a href="/list/e3" target="_blank"><em>设计 | 前端 | 视频</em></a> 
       <div style="display:none;">
        商务办公电脑
       </div> 
       <a class="more" href="/list/e3" target="_blank">更多</a> 
      </div> 
      <div class="floor-main"> 
       <div class="atz-pl"> 
        <a href="http://www.aiterent.com/product/1806200002" target="_blank"> <img alt="图形处理类电脑租赁" data-original="https://oss.aiterent.com/upload/10003427/2019/02/28/9baf509e-64f8-435d-a803-65f795e66af8.png" src="https://www.aiterent.com/images/load.gif" style="display: inline;" /> </a> 
       </div> 
       <div class="atz-pr" id="pr_1"> 
        <a href="/product/1807180001" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 苹果Apple MacBook Pro 笔记本电脑（i5-2.3G/8G/128G/Intel Iris640/13" etina="" multi-touch）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/07/18/76290269-5a0d-4f27-ad02-f4f81acb0093_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 苹果Apple MacBook Pro 笔记本电脑（i5-2.3G/8G/128G/Intel Iris640/13&quot;/Retina/无Multi-Touch）</p> 
          <span> <i>394元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1812280008" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 微软Microsoft Surface Laptop 2 笔记本电脑（i5/8GB/128GB/13.5''/Win10H）" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/12/28/f8ebba0f-4fa0-46b7-9d18-36aea3fbf35a_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 微软Microsoft Surface Laptop 2 笔记本电脑（i5/8GB/128GB/13.5''/Win10H）</p> 
          <span> <i>436元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1905230001" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 戴尔Dell 3060MT 台式主机（i5-8500/16G/1T/Win10H/集显）" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2019/05/23/afbfef52-f8f5-49de-8a5f-f818bf05fa6d_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 戴尔Dell 3060MT 台式主机（i5-8500/16G/1T/Win10H/集显）</p> 
          <span> <i>229元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1806200003" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 机械革命(MECHREVO) S1 笔记本电脑（i7-8550U/8GB/256G SSD/14" g独显）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/06/20/cdb4097f-cc63-46cf-b9be-5aae4cb4d168_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 机械革命(MECHREVO) S1 笔记本电脑（i7-8550U/8GB/256G SSD/14&quot;/2G独显）</p> 
          <span> <i>255元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1812280001" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 Microsoft Surface Pro6 超级本（i5/8GB/128GB/12.3''/Win10H 不含键盘/触控笔）" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/12/28/b0c74b9b-7500-47bf-b304-596da10f38a7_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 Microsoft Surface Pro6 超级本（i5/8GB/128GB/12.3''/Win10H 不含键盘/触控笔）</p> 
          <span> <i>339元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1807180002" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 苹果Apple MacBook Pro 笔记本电脑（i5-2.3G/8G/256G/Intel Iris640/13" etina="" multi-touch）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/07/18/ca2c9dbb-b154-4f90-82f2-c19ed626fe20_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 苹果Apple MacBook Pro 笔记本电脑（i5-2.3G/8G/256G/Intel Iris640/13&quot;/Retina/无Multi-Touch）</p> 
          <span> <i>453元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
       </div> 
      </div> 
     </div> 
     <div class="floor f1 clear" data-nav-type="1"> 
      <div class="floor-title"> 
       <span onclick="window.open('/list/e4','_blank');">技术开发</span> 
       <a href="/list/e4" target="_blank"><em>开发 | 程序 | 建模</em></a> 
       <div style="display:none;">
        电脑出租
       </div> 
       <a class="more" href="/list/e4" target="_blank">更多</a> 
      </div> 
      <div class="floor-main"> 
       <div class="atz-pl"> 
        <a href="http://www.aiterent.com/product/1809300003" target="_blank"> <img alt="技术开发专用电脑租赁" data-original="https://oss.aiterent.com/group1/M00/00/1B/rKgABV0ZouKAHGD9AAFhMmnTeb4536.png" src="https://www.aiterent.com/images/load.gif" style="display: inline;" /> </a> 
       </div> 
       <div class="atz-pr" id="pr_1"> 
        <a href="/product/1812280009" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 微软Microsoft Surface Laptop 2 笔记本电脑（i5/8GB/256GB/13.5''/Win10H）" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/12/28/6d95106b-c41b-40f2-a03d-8cf2bf35da2e_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 微软Microsoft Surface Laptop 2 笔记本电脑（i5/8GB/256GB/13.5''/Win10H）</p> 
          <span> <i>512元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1806200003" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 机械革命(MECHREVO) S1 笔记本电脑（i7-8550U/8GB/256G SSD/14" g独显）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/06/20/cdb4097f-cc63-46cf-b9be-5aae4cb4d168_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 机械革命(MECHREVO) S1 笔记本电脑（i7-8550U/8GB/256G SSD/14&quot;/2G独显）</p> 
          <span> <i>255元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1804270033" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 苹果Apple MacBook 笔记本电脑（Core M3-1.2G/8G/256G/Intel HD615/Retina/12" 显）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/04/27/9d5c6fc1-a1c2-4f33-8eb7-f7873c36a4d3_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 苹果Apple MacBook 笔记本电脑（Core M3-1.2G/8G/256G/Intel HD615/Retina/12&quot;/集显）</p> 
          <span> <i>384元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1804260028" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 麦本本 大麦5S 笔记本电脑（i5-8250U/GTX1050 4G/8GB/240GB SSD/15.6" ）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/04/26/585a72d4-0ddf-4072-ad0d-5f8576996c87_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 麦本本 大麦5S 笔记本电脑（i5-8250U/GTX1050 4G/8GB/240GB SSD/15.6&quot;）</p> 
          <span> <i>279元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1807180002" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 苹果Apple MacBook Pro 笔记本电脑（i5-2.3G/8G/256G/Intel Iris640/13" etina="" multi-touch）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/07/18/ca2c9dbb-b154-4f90-82f2-c19ed626fe20_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 苹果Apple MacBook Pro 笔记本电脑（i5-2.3G/8G/256G/Intel Iris640/13&quot;/Retina/无Multi-Touch）</p> 
          <span> <i>453元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1811160001" target="_blank"> 
         <div class="pic"> 
          <img alt="ThinkPad T430 笔记本电脑（i5/16GB/250GB SSD/14" 显）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/11/16/11aa45c5-ac18-4482-aa39-d41f188eba0b_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>ThinkPad T430 笔记本电脑（i5/16GB/250GB SSD/14&quot;/集显）</p> 
          <span> <i>125元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
       </div> 
      </div> 
     </div> 
     <div class="floor f1 clear" data-nav-type="1"> 
      <div class="floor-title"> 
       <span onclick="window.open('/list/e5','_blank');">电竞专区</span> 
       <a href="/list/e5" target="_blank"><em>游戏 | 竞赛 | 娱乐</em></a> 
       <div style="display:none;">
        笔记本租赁
       </div> 
       <a class="more" href="/list/e5" target="_blank">更多</a> 
      </div> 
      <div class="floor-main"> 
       <div class="atz-pl"> 
        <a href="http://www.aiterent.com/product/1806200004" target="_blank"> <img alt="电竞专用电脑租赁" data-original="https://oss.aiterent.com/upload/10003427/2019/01/04/75f7cdb7-d43c-43e8-8fb1-8a5ec3c85b9c.png" src="https://www.aiterent.com/images/load.gif" style="display: inline;" /> </a> 
       </div> 
       <div class="atz-pr" id="pr_1"> 
        <a href="/product/1904300001" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 麦本本 金麦6A 笔记本电脑（赛扬N4000/8GB/128GB SSD/UHD 600/13.3" ）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2019/04/30/a1a21a46-354c-4a3f-a182-268e206a53c3_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 麦本本 金麦6A 笔记本电脑（赛扬N4000/8GB/128GB SSD/UHD 600/13.3&quot;）</p> 
          <span> <i>101元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1804260025" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 麦本本 大麦6X 笔记本电脑（i7-8550U/GTX1050 4G/8GB/128GB SSD/15.6" ）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/04/26/eea8123f-941f-43dc-98ee-67ea791e39df_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 麦本本 大麦6X 笔记本电脑（i7-8550U/GTX1050 4G/8GB/128GB SSD/15.6&quot;）</p> 
          <span> <i>309元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1804260022" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 火影 金钢4K 笔记本电脑（ i7-8750H/GTX1050 Ti /8GB/256GB SSD/15.6" ）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/04/26/4099428e-8927-435c-9161-a65573e502e3_0.jpg?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 火影 金钢4K 笔记本电脑（ i7-8750H/GTX1050 Ti /8GB/256GB SSD/15.6&quot;）</p> 
          <span> <i>349元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1804260027" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 麦本本 大麦5X 笔记本电脑（i7-8550U/GTX1050 4G/8GB/240GB SSD/15.6" ）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/04/26/ef01661f-fc12-49d9-ae77-dd670f1fdabe_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 麦本本 大麦5X 笔记本电脑（i7-8550U/GTX1050 4G/8GB/240GB SSD/15.6&quot;）</p> 
          <span> <i>299元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1804260023" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 火影 金钢GTX 笔记本电脑（ i7-7700HQ/GTX1060 /8GB/256GB SSD/15.6" ）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/04/26/01d74eb8-d389-4e36-8a55-132f535ed6f0_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 火影 金钢GTX 笔记本电脑（ i7-7700HQ/GTX1060 /8GB/256GB SSD/15.6&quot;）</p> 
          <span> <i>355元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1806200004" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 机械革命(MECHREVO) Z2 笔记本电脑（i7-8750HQ/8GB/1T+128G SSD/15.6" tx1050ti）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/06/20/58128364-385c-459c-9f6c-d9d317c62a6f_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 机械革命(MECHREVO) Z2 笔记本电脑（i7-8750HQ/8GB/1T+128G SSD/15.6&quot;/GTX1050Ti）</p> 
          <span> <i>329元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
       </div> 
      </div> 
     </div> 
     <div class="floor f1 clear" data-nav-type="1"> 
      <div class="floor-title"> 
       <span onclick="window.open('/jifang/','_blank');">机房网络</span> 
       <a href="/jifang/" target="_blank"><em>服务器 | 网络设备 | UPS</em></a> 
       <div style="display:none;">
        1
       </div> 
       <a class="more" href="/jifang/" target="_blank">更多</a> 
      </div> 
      <div class="floor-main"> 
       <div class="atz-pl"> 
        <a href="http://www.aiterent.com/product/1804260032" target="_blank"> <img alt="机房网络设备租赁" data-original="https://oss.aiterent.com/group1/M00/00/1B/rKgABV0Zou-ATlLGAAEZIFXRK8g386.png" src="https://www.aiterent.com/images/load.gif" style="display: inline;" /> </a> 
       </div> 
       <div class="atz-pr" id="pr_1"> 
        <a href="/product/1806040002" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 同方(THTF)超强R628 机架式服务器（2*Intel Xeon Silver 4114/2*32GB DDR4/2*300GB 10K）" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/06/04/f90926e1-e3bd-455c-8e81-a318be75eb3c_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 同方(THTF)超强R628 机架式服务器（2*Intel Xeon Silver 4114/2*32GB DDR4/2*300GB 10K）</p> 
          <span> <i>1250元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1805160005" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 Dell R730 机架式服务器（2*E5-2690 v4/2*16G RDIMM/2*600GB 10K/H730）" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/05/16/cd9eb295-37ba-4a28-8349-cd9ee4430747_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 Dell R730 机架式服务器（2*E5-2690 v4/2*16G RDIMM/2*600GB 10K/H730）</p> 
          <span> <i>2000元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1806050002" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 同方(THTF)超强TR740 机架式服务器（2*Intel Xeon Silver 4114/2*32GB DDR4/2*300GB 10K）" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/06/06/b43096c7-1de2-42fe-b03d-ac0ba63a5d7c_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 同方(THTF)超强TR740 机架式服务器（2*Intel Xeon Silver 4114/2*32GB DDR4/2*300GB 10K）</p> 
          <span> <i>1800元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1804260031" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 Dell PowerVault TL2000 磁带库（2U/24 Slots/20* LTO6 Tape）" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/04/26/6204bd64-5be4-4356-bf36-53c6028dbf9c_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 Dell PowerVault TL2000 磁带库（2U/24 Slots/20* LTO6 Tape）</p> 
          <span> <i>1800元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1804260034" target="_blank"> 
         <div class="pic"> 
          <img alt="HP DL388 机架式服务器（E5-2603 v3/16G RDIMM/2*600GB 10K/H330）" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/04/26/a349dc39-1201-48fc-a714-81e809adb611_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>HP DL388 机架式服务器（E5-2603 v3/16G RDIMM/2*600GB 10K/H330）</p> 
          <span> <i>700元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1804260032" target="_blank"> 
         <div class="pic"> 
          <img alt="Cisco  WS-C3750X-48T-S 交换机（三层/千兆/350W）" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/04/26/44980365-ebd9-4a43-9be6-221f198ead81_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>Cisco WS-C3750X-48T-S 交换机（三层/千兆/350W）</p> 
          <span> <i>199元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
       </div> 
      </div> 
     </div> 
     <div class="floor f1 clear" data-nav-type="1"> 
      <div class="floor-title"> 
       <span onclick="window.open('/list/c9','_blank');">配件区</span> 
       <a href="/list/c9" target="_blank"><em>外设 | 键鼠 | 硬盘</em></a> 
       <div style="display:none;">
        1
       </div> 
       <a class="more" href="/list/c9" target="_blank">更多</a> 
      </div> 
      <div class="floor-main"> 
       <div class="atz-pl"> 
        <a href="http://www.aiterent.com/product/1809120001" target="_blank"> <img alt="办公设备配件租赁" data-original="https://oss.aiterent.com/upload/10003427/2019/01/04/349d2a30-4e17-43a0-b086-ecdfb3761d98.png" src="https://www.aiterent.com/images/load.gif" style="display: inline;" /> </a> 
       </div> 
       <div class="atz-pr" id="pr_1"> 
        <a href="/product/1804200008" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 Dell S2318M IPS屏液晶显示器（23''/1920*1080/DVI+VGA）" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/05/08/f973ce04-effa-4b80-9ee9-a76190b340c6_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 Dell S2318M IPS屏液晶显示器（23''/1920*1080/DVI+VGA）</p> 
          <span> <i>89元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1804210032" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 泰格斯（Targus） ASP48APX 电脑锁" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/04/26/98da5e3a-b96a-4f62-8134-cb6a7770df64_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 泰格斯（Targus） ASP48APX 电脑锁</p> 
          <span> <i>299元</i> </span> 
          <strong>马上购买</strong> 
         </div> </a> 
        <a href="/product/1809130001" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 清华同方PD650教育白板（i3-6100/4G DDR4/128G SSD/65" ）"="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/09/13/1fb2aa21-14ff-4e4c-a2bb-7ff3cc33bb38_0.jpg?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 清华同方PD650教育白板（i3-6100/4G DDR4/128G SSD/65&quot;）</p> 
          <span> <i>359元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1804210035" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 雷柏（Rapoo） M218 无线鼠标" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/04/26/b56c81cb-f5a0-4644-a2cd-296c00934c8e_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 雷柏（Rapoo） M218 无线鼠标</p> 
          <span> <i>38元</i> </span> 
          <strong>马上购买</strong> 
         </div> </a> 
        <a href="/product/1809120001" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 清华同方50X1 4K安卓智能电视 50" "="" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/09/12/50546c8f-cd45-4ed7-b768-c32eb74e0a19_0.jpg?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 清华同方50X1 4K安卓智能电视 50&quot;</p> 
          <span> <i>95元/月</i> </span> 
          <strong>马上租赁</strong> 
         </div> </a> 
        <a href="/product/1804260037" target="_blank"> 
         <div class="pic"> 
          <img alt="全新 西部数据 WD  Elements 4TB USB3.0/2.5''" src="https://www.aiterent.com/images/load.gif" class="lazy" data-original="https://oss.aiterent.com/upload/10003427/2018/04/26/474a30f1-8e7b-4635-8170-2eced72da499_0.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_160,h_160" style="display: inline;" /> 
         </div> 
         <div class="info"> 
          <p>全新 西部数据 WD Elements 4TB USB3.0/2.5''</p> 
          <span> <i>859元</i> </span> 
          <strong>马上购买</strong> 
         </div> </a> 
       </div> 
      </div> 
     </div> 
    </div> 
    <div class="atz-partner-module"> 
     <div class="layout"> 
      <div class="atz-title"> 
       <span>合作伙伴</span> 
       <em> <button class="change" id="partnerChange">换一换</button> </em> 
      </div> 
      <div class="partner clear"> 
       <ul> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/05/08/d8bf7b20-9c67-44c9-96c8-2f821b76a323.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="EY" alt="EY" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/05/08/ee14d766-5bbf-43b8-b482-5975f3c3c44c.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="PWC" alt="PWC" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/11/26/03da4564-bb99-4203-9e2b-d9837c200372.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="58同城" alt="58同城" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/11/26/1bc9f67d-4ac4-44b4-bd17-c3c4f0b50059.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="联通" alt="联通" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/11/26/178777ba-7be9-4015-9e99-08603166ce64.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="高丝" alt="高丝" /></a> </li> 
        <li> <a><img src="http://oss.aiterent.com/files/2019/10/1571810209231496.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="上海海洋大学" alt="上海海洋大学" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/files/2019/07/1563955714475577.jpg?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="戴德梁行" alt="戴德梁行" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/files/2019/07/1563955714490237.jpg?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="上海市委" alt="上海市委" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/files/2019/07/1563955714489611.jpg?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="RoBoCup" alt="RoBoCup" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/files/2019/07/1563955714569887.jpg?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="全球创业周" alt="全球创业周" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/files/2019/07/1563955714597717.jpg?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="上海市人民政府" alt="上海市人民政府" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/files/2019/07/1563955714604833.jpg?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="浙江大学" alt="浙江大学" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/11/26/2d5e21da-902d-4f88-b99d-64ec828bf6ef.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="树根" alt="树根" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/11/26/c876afe7-9228-423e-9116-83b2b2e6cf00.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="通彩" alt="通彩" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/11/26/663fbd9f-d150-4a30-90b2-87e74d890e23.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="紫金计量" alt="紫金计量" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/11/26/accf8e80-0e8b-4f6f-a80c-ec9b857d6f4a.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="艾斯艾" alt="艾斯艾" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/04/26/ab5c3e6f-7528-4989-ba1f-6ea51ae06883.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="清华同方" alt="清华同方" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/04/26/1d3c1993-603c-4af7-b1b6-9510c2606b37.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="戴尔" alt="戴尔" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/04/27/02946e55-d787-4be0-993a-3cdf79901172.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="联想" alt="联想" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/04/26/4e99bcea-5e46-4a6c-97c5-041f9ec41312.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="惠普" alt="惠普" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/04/26/50d8c816-2b33-4485-868a-d9832d19ac94.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="华三" alt="华三" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/04/27/dcc60aa2-13b8-4bba-b172-6f7517321944.png?x-oss-process=image/resize,m_fixed,auto-orient,1,w_199,h_120" title="思科" alt="思科" /></a> </li> 
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
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/05/14/d7679841-4b44-46a2-ba7c-9aaaad0af2f9.png" title="量富征信" alt="量富征信" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/04/28/21b0d6de-4bbe-412b-8de2-b4139cbfcb59.png" title="芝麻信用" alt="芝麻信用" /></a> </li> 
        <li> <a><img src="https://oss.aiterent.com/upload/10003427/2018/12/21/7294495e-fbd0-4d8a-896f-001449702457.png" title="雷达" alt="雷达" /></a> </li> 
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