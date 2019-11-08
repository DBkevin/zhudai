<!--页头 begin -->
<div class="atz-header">
    <!--[if IE]>
<style>
    body{
        padding-top: 40px;
    }
    .browser-fixed{
        background: #ea5504;
        color: #fff;
        height: 40px;
        line-height: 40px;
        text-align: center;
        font-size: 16px;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 100;
    }
    .browser-fixed>div{
        max-width: 1200px;
        margin: 0 auto;
    }
    .browser-fixed>div>p{
        display: inline-block;
    }
    .browser-fixed>div>a{
        float: right;
        margin-right: 20px;
        color: #fff;
    }
</style>
<div class="browser-fixed" id="browser-fixed">
    <div>
        <p>IE网页兼容性差、页面加载缓慢、体验不友好。建议更换其他高速浏览器</p>
        <a href="javascript:;" id="browser-fixed-close">关闭</a>
    </div>

</div>

<script>
    var browser_fixed=document.getElementById("browser-fixed"),browser_fixed_close=document.getElementById("browser-fixed-close");
    if (browser_fixed_close) {
        if (!!document.attachEvent) {
            browser_fixed_close.attachEvent("onclick", function () {
                if (browser_fixed) {
                    browser_fixed.style.display="none";
                    document.getElementsByTagName("body")[0].style.paddingTop="0"
                }
            })
        } else {
            browser_fixed_close.addEventListener("click", function () {
                if (browser_fixed) {
                    browser_fixed.style.display="none";
                    document.getElementsByTagName("body")[0].style.paddingTop="0"
                }
            })
        }
    }
</script>
<![endif]-->
    <div class="atz-mini-nav">
        <div class="layout">
            <div class="atz-pl"> <span id="spanusername">您好，欢迎来到艾特租！</span>
                <div style="display:none;">笔记本电脑租赁平台</div>
                <a href="javascript:void(0);" style="display:none;" class="company_zmxy_link"><i>开通商家/企业芝麻分</i>
                    <div>开通企业信用分，获得更高额度，立享免押金租机。</div>
                </a>
                <span style="color:#ea5504;">客服热线：4000-778-768 </span>
            </div>
            <div class="atz-pr" id="index-login-userinfo"><a class="login" href="/login/" rel="nofollow">登录</a><a
                    class="reg" href="/register/" rel="nofollow">注册</a><span></span><a class="wcQrcodeSwitch"
                    href="javascript:void(0);"><em>微信端</em>
                    <div><img src="/images/wc_qrcode.jpg"></div>
                </a><em>|</em><a class="service" target="_blank" href="/article/42">服务中心</a> </div>
        </div>
    </div>
    <div class="atz-hd">
        <div class="layout">
            <div class="atz-pl">
                <div class="atz-brand">
                    <a href="/"> <img alt="艾特租办公电脑租赁logo图片" src="/images/atz_logo.png"> </a>
                    <div style="display:none;">
                        <h1>租电脑</h1><span>笔记本租用、办公电脑租赁、笔记本电脑租赁</span>
                    </div>
                </div>
            </div>
            <div class="atz-pl">
                <div class="atz-slogan">
                    <a href="/"> <img src="/images/slogan.png"> </a>
                </div>
            </div>
            <div class="atz-pr">
                <div class="atz-cart-widget">
                    <a href="/cart/" rel="nofollow">
                        <span>购物车</span>
                        <em class="cartnum">0</em>
                    </a>
                </div>
            </div>
            <div class="atz-pr">
                <div class="atz-search">
                    <input type="text" id="searchparam">
                    <a href="/product" onclick="searchKeyword()"></a>
                </div>
                <div class="atz-labels">
                    <a href="/product">ThinkPad</a>
                    <a href="/product">机械革命</a>
                    <a href="/product">服务器</a>
                    <a href="/product">笔记本</a>
                    <a href="/product">Dell</a>
                    <a href="/product">HP</a>
                    <a href="/product">清华同方</a>
                </div>
            </div>
        </div>
    </div>
    <div class="atz-nav">
        <div class="layout">
            <div class="atz-nav-item" id="comClass">
                <a href="javascript:void(0);"><span>全部商品分类</span></a>
                <div class="menu">
                    <div class="item">
                        <h3 class="ico_1">
                            <a href="/product">办公电脑</a>
                        </h3>
                        <a href="/product">笔记本</a>
                        <a href="/product">台式机</a>
                        <a href="/product">一体机</a>
                        <a href="/product">主机</a>
                    </div>
                    <div class="item">
                        <h3 class="ico_2">
                            <a href="/product">办公设备</a>
                        </h3>
                        <a href="/product">打印机</a>
                        <a href="/product">复印机</a>
                        <a href="/product">显示器</a>
                        <a href="/product">碎纸机</a>
                        <a href="/product">手机</a>
                        <a href="/product">平板</a>
                        <a href="/product">配件</a>
                        <a href="/product">投影仪</a>
                    </div>
                    <div class="item">
                        <h3 class="ico_3">
                            <a href="/product">机房建设</a>
                        </h3>
                        <a href="/product">服务器</a>
                        <a href="/product">磁带库</a>
                        <a href="/product">网络设备</a>
                        <a href="/product">UPS</a>
                    </div>
                    <div class="item">
                        <h3 class="ico_4">
                            <a href="/product">增值服务</a>
                        </h3>
                        <a href="/product">计次上门</a>
                        <a href="/product">驻场服务</a>
                        <a href="/product">企业培训</a>
                        <a href="/product">软件定制</a>
                    </div>
                    <div class="item">
                        <h3 class="ico_5">
                            <a href="/product">价格区间</a>
                        </h3>
                        <a href="/product">￥0 - ￥99</a>
                        <a href="/product">￥100 - ￥199</a>
                        <a href="/product">￥200 - ￥299</a>
                        <a href="/product">￥300以上</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="atz-nav-item">
            <a href="/"><span>首页</span> </a>
        </div>
        <div class="atz-nav-item">
            <a href="/promotion/" target="_blank">
                当月特惠
                </span><em class="showy">活动</em></a>
        </div>
        <div class="atz-nav-item">
            <a href="/product" target="_blank"><span>快速租赁</span></a>
        </div>
        <div class="atz-nav-item">
            <a href="/product" target="_blank"><span>新机租赁</span></a>
        </div>
        <div class="atz-nav-item">
            <a href="/product" target="_blank"><span>短期租赁</span> </a>
        </div>
        <div class="atz-nav-item">
            <a href="/product" target="_blank"><span>绿色回收</span> </a>
        </div>
    </div>
</div>