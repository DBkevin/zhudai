@extends('layouts.recycle')
@section('title','绿色回收')
@section('styles')
<link rel="stylesheet" href="{{asset('css/recycle.css')}}">
<link rel="stylesheet" href="{{asset('css/layer.css')}}">
@endsection
@section('content')
<div class="bc-header clear">
    <div class="layout clear">
        <div class="bc-brand"><a href="/"><img width="130" src="/images/logo.png"></a></div>
        <div class="bc-slogan"><a href="/"><img width="210" src="/images/slogan.png"></a></div>
        <div class="bc-nav">
            <a href="javascript:void(0);" class="login bizlogin" style="display:none">登录</a>
            <a href="javascript:void(0);" class="reg bizreg" style="display:none">注册</a>
            <a href="javascript:void(0)" class="bizmain" style="display:none">个人中心</a>
            <a href="/" class="index">首页</a>
            <a href="javascript:void(0);" class="allType">全部机型</a>
            <a href="javascript:void(0);" class="wcClient">
                <em>微信端</em>
                <div><img src="/images/wc_qrcode.jpg"></div>
            </a>
            <a href="javascript:void(0)" class="service">服务中心</a>
        </div>
    </div>
</div>
<div class="bc-banner"></div>
<div class="base-img">
    <div class="layout">
        <div class="floor floor1">
            <div class="title">回收类型</div>
            <div class="blocks">
                <div class="block b1">
                    <span>笔记本</span>
                </div>
                <div class="block b2">
                    <span>台式电脑</span>
                </div>
                <div class="block b3">
                    <span>服务器</span>
                </div>
                <div class="block b4">
                    <span>网络设备</span>
                </div>
            </div>
        </div>
        <div class="floor floor2">
            <div class="title">选择我们的3大理由</div>
            <div class="blocks">
                <div class="block b1">
                    <span>快速报价</span>
                    <em>急速回复<br>只需30分钟</em>
                </div>
                <div class="block b2">
                    <span>最优价格</span>
                    <em>精准报价<br>不擅长砍价</em>
                </div>
                <div class="block b3">
                    <span>安全保障</span>
                    <em>专业设备销毁数据<br>保障企业隐私</em>
                </div>
            </div>
        </div>
        <div class="floor floor3">
            <div class="title">省心回收 只需4步<br><span>化繁为简，以最快速的方式为您解决设备回收问题，随时随地享受专业服务</span></div>
            <div class="blocks">
                <div class="block b1">
                    <span>填写信息</span>
                </div>
                <div class="block b2">
                    <span>提交订单</span>
                </div>
                <div class="block b3">
                    <span>获取报价</span>
                </div>
                <div class="block b4">
                    <span>邮寄/上门回收</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bc-form">
    <h1>企业回收预约</h1>
    <div class="bc-field type1">
        <label for="c1">公司名称：</label>
        <input type="text" id="c1" placeholder="请输入公司名称">
    </div>
    <div class="bc-field type1">
        <label for="c2">联系人：</label>
        <input type="text" id="c2" placeholder="请输入联系人">
    </div>
    <div class="bc-field type1">
        <label for="c3">联系电话：</label>
        <input type="text" id="c3" placeholder="请输入联系电话">
        <p class="msg">请输入正确的联系电话</p>
    </div>
    <div class="bc-field type1">
        <label for="c4">台数：</label>
        <input type="text" id="c4" placeholder="请输入台数">
    </div>
    <div class="bc-field type1">
        <label for="c5">购置年份：</label>
        <select name="c5" id="c5">
            <option value="0" disabled="" selected="">请选择购置年份</option>
            <option value="1">一年</option>
            <option value="2">二年</option>
            <option value="3">三年</option>
            <option value="4">四年</option>
            <option value="5">五年</option>
            <option value="6">六年</option>
            <option value="7">七年</option>
            <option value="8">八年</option>
            <option value="9">九年</option>
            <option value="10">十年以上</option>
        </select>
    </div>
    <div class="bc-field type2">
        <span>设备类型：</span>
        <div class="boxGroup types">
            <label><input type="checkbox" name="equipment" value="笔记本"><i>笔记本</i></label>
            <label><input type="checkbox" name="equipment" value="台式机"><i>台式机</i></label>
            <label><input type="checkbox" name="equipment" value="服务器"><i>服务器</i></label>
            <label><input type="checkbox" name="equipment" value="网络设备"><i>网络设备</i></label>
        </div>
    </div>
    <div class="bc-field type2">
        <span>设备品牌：</span>
        <div class="boxGroup pps" id="brandAll"><label><input type="checkbox" name="brand"
                    value="清华同方（THTF）"><i>清华同方（THTF）</i></label><label><input type="checkbox" name="brand"
                    value="惠普（HP）"><i>惠普（HP）</i></label><label><input type="checkbox" name="brand"
                    value="联想（ThinkPad）"><i>联想（ThinkPad）</i></label><label><input type="checkbox" name="brand"
                    value="戴尔（Dell）"><i>戴尔（Dell）</i></label><label><input type="checkbox" name="brand"
                    value="苹果（Apple）"><i>苹果（Apple）</i></label><label><input type="checkbox" name="brand"
                    value="麦本本（MAIBENBEN）"><i>麦本本（MAIBENBEN）</i></label><label><input type="checkbox" name="brand"
                    value="火影（VULCAN）"><i>火影（VULCAN）</i></label><label><input type="checkbox" name="brand"
                    value="机械革命(MECHREVO) "><i>机械革命(MECHREVO) </i></label><label><input type="checkbox" name="brand"
                    value="肯辛通（Kensington）"><i>肯辛通（Kensington）</i></label><label><input type="checkbox" name="brand"
                    value="泰格斯（Targus）"><i>泰格斯（Targus）</i></label><label><input type="checkbox" name="brand"
                    value="微软（Microsoft）"><i>微软（Microsoft）</i></label><label><input type="checkbox" name="brand"
                    value="思科（Cisco）"><i>思科（Cisco）</i></label><label><input type="checkbox" name="brand"
                    value="华为（HUAWEI）"><i>华为（HUAWEI）</i></label><label><input type="checkbox" name="brand"
                    value="罗技（Logitech）"><i>罗技（Logitech）</i></label><label><input type="checkbox" name="brand"
                    value="金士顿（Kingston）"><i>金士顿（Kingston）</i></label><label><input type="checkbox" name="brand"
                    value="西数（WD）"><i>西数（WD）</i></label><label><input type="checkbox" name="brand"
                    value="科密（Comet）"><i>科密（Comet）</i></label><label><input type="checkbox" name="brand"
                    value="雷柏（Rapoo）"><i>雷柏（Rapoo）</i></label><label><input type="checkbox" name="brand"
                    value="艾特租（Aiterent）"><i>艾特租（Aiterent）</i></label><label><input type="checkbox" name="brand"
                    value="华硕（ASUS）"><i>华硕（ASUS）</i></label><label><input type="checkbox" name="brand"
                    value="爱其（EIKI）"><i>爱其（EIKI）</i></label></div>
    </div>
    <div class="bc-field type2" style="margin-bottom: 20px;">
        <span>备注信息：</span>
        <textarea name="bz" id="bz" cols="30" rows="10"></textarea>
    </div>
    <a href="javascript:void(0);" class="bc-submit" id="recyleSubmit">立即预约</a>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/jquery.xdomainrequest.min.js')}}"></script>
<script>
    function recyleInit() {
        $("#recyleSubmit").unbind("click").bind("click", function () {
            /**验证联系电话**/
            var phone = $("#c3").val();
            var phone_reg = /^((0\d{2,3}-?\d{7,8})|(1[3|4|5|6|7|8|9][0-9]{9}))$/;
            if (!phone_reg.test(phone)) {
                $("#c3").next("p").addClass("msgErr");
                return false;
            } else {
                $("#c3").next("p").removeClass("msgErr");
            }
            var comname = $("#c1").val(),username = $("#c2").val(),tel = $("#c3").val(),num = $("#c4").val(),years = $("#c5").val();
            var equipment = [], brand = [];
            $("input[name=equipment]:checked").each(function (ele) {
                equipment.push($(this).val());
            });
            $("input[name=brand]:checked").each(function (ele) {
                brand.push($(this).val());
            });
            $.ajax({
                headers:{
                'X-CSRF-TOKEN':"{{ csrf_token() }}"
                 },
                url: "/recycle",
                type: "post",
                data: {
                    "comname": comname,
                    "username": username,
                    "tel": tel,
                    "num": num,
                    "year": years,
                    "devtypes": equipment.join(","),
                    "brand": brand.join(","),
                    "bz": $("#bz").val()
                },
                success:function(res) {
                        _layer.alert("回收预约成功！")
                        $("#c1").val("");
                        $("#c2").val("");
                        $("#c3").val("");
                        $("#c4").val("");
                        $("#c5").val("");
                        $("#bz").val("");
                        $("input[name=equipment]").prop("checked",false);
                        $("input[name=brand]").prop("checked",false);
                } ,
                error:function (err){
                    _layer.alert("回收预约失败！");
                } 
            });
        });
    }
    recyleInit();

    /*
* layer 弹窗设置
 */


window._layer = {
    alert: function alert(content, btn, func, title, func2) {
        //提示框
        layer.open({
            title: title || false,
            closeBtn: false,
            content: "<p>" + content + "</p>",
            btnAlign: 'c',
            area: ['440px', '240px'],
            skin: 'atz-alert',
            btn: btn || '确定',
            yes: function yes (index) {
                if (typeof func2 == "function") {
                    func2();
                }
                layer.close(index)
            },
            end: function end(index) {
                if (typeof func == "function") {
                    func();
                }
            }
        });
    },
    confirm: function confirm(content, btns, func) {
        //确认对话框
        layer.open({
            title: false,
            closeBtn: false,
            content: "<p>" + content + "</p>",
            skin: 'atz-confirm',
            area: ['440px', '240px'],
            btn: btns || ['确定', '取消'],
            yes: function yes(index) {
                layer.close(index);
                if (typeof func == "function") {
                    func();
                }
            }
        });
    },
    loading: function loading() {
        //加载动画层
        return layer.open({
            type: 2,
            content: '加载中',
            shadeClose: false
        });
    },
    closeLoading: function closeLoading(load) {
        //关闭弹出层
        layer.close(load);
    },
    bottomConfirm: function bottomConfirm(content, btns, func) {
        //底部对话框
        layer.open({
            content: '这是一个底部弹出的询问提示',
            btn: btns || ['确定', '取消'],
            skin: 'footer',
            yes: function yes(index) {
                func();
            }
        });
    }
}; //封装当前url
</script>
@endsection