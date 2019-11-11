var productInfo = {},product_isInit=false,ecdeposit={depositNewUsable:0,depositOldUsable:0},vbs;
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
function productInit() {
    if ($("#show_modal").attr("data-id")) {
        productInfo["id"] = $("#show_modal").attr("data-id");
    }
    if ($("#show_modal").attr("data-type")) {
        productInfo["xstype"] = $("#show_modal").attr("data-type");
    }
    if ($("#show_modal").attr("data-holdp")) {
        productInfo["iholdprice"] = $("#show_modal").attr("data-holdp");
    }
    if ($("#show_modal").attr("data-num")) {
        productInfo["restnum"] = $("#show_modal").attr("data-num");
    }
    if ($("#show_modal").attr("data-isnew")) {
        productInfo["isnew"] = $("#show_modal").attr("data-isnew");
    }
    // 获取选中的
    $("#config label").click(function () {
        if(!$(this).find("input[type='radio']").is(':checked')){
            getProduct($(this).find("input[type='radio']").attr("ibh"));
        }
    });
    $(document).on('click', '#protect input', function () {
        if ($(this).prop('checked')) {
            $('#protect input').prop('checked', false);
            $(this).prop('checked', true);
        }
        setTimeout(function () {
            setrentTime();
        })
    });
    $(document).on('click', '#service input', function () {
        if ($(this).prop('checked')) {
            $('#service input').prop('checked', false);
            $(this).prop('checked', true);
        }
        setTimeout(function () {
            setrentTime();
        })
    });
    /**配置modal**/
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
    /**租赁方式modal**/
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
    selectWay();
    setrentTime();
    opNum();
    productImg();
}
function productImg() {
    try {
        var imgs= $("#atz-ipic").val().split(",");
        if (imgs.length>0) {
            var str="";
            $.each(imgs, function (k,v ) {
                str+="<div class=\"swiper-slide\"><img class=\"swiper-lazy\" data-src='"+v+publicData.imgParam+",w_640,h_640' alt=''><div class=\"swiper-lazy-preloader\"></div></div>";
            });
            var times=new Date().getTime();
            $("#customcode_2sXAW9sZ #product-banner .swiper-wrapper").html("");
            if(!!vbs) {
                vbs.destroy(true);
            }
            setTimeout(function () {
                $("#customcode_2sXAW9sZ #product-banner").addClass("swiper-container").removeClass(".swiper-container-horizontal");
                $("#customcode_2sXAW9sZ #product-banner .swiper-wrapper").html(str);
                vbs = new Swiper('#customcode_2sXAW9sZ #product-banner', {
                    //speed: 1000,
                    autoplay: 3000,
                    loop: true,
                    observer:true,
                    lazyLoading: true,
                    observeParents:false,
                    autoplayDisableOnInteraction: false,
                    pagination: '#product-banner .swiper-pagination'
                });
            }, 50)

        } else {
            $("#customcode_2sXAW9sZ #atz-ipic").next().removeClass("swiper-container");
        }
    } catch (e) {
        $("#customcode_2sXAW9sZ #atz-ipic").next().removeClass("swiper-container");
    }
}

function selectWay() {
    $("#ways label").unbind("click").click(function () {
        setTimeout(function () {
            setrentTime();
        },200)
    });
}
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
    var price=$("#ways label input:checked").attr("pid"), aperiod=$("#ways label input:checked").attr("aperiod"), bperiod=$("#ways label input:checked").attr("bperiod"), bprice=$("#ways label input:checked").attr("bprice"), oprice=$("#ways label input:checked").attr("oprice");

    if ($("#ways label input:checked").attr("pid")!==undefined){
        var dec = "", unitName="月",unitName2 = "个月";
        if ($("#ways label input:checked").attr("unit") == 2) {
            unitName = "周";
            unitName2 = "周";
        }
        if ($("#ways label input:checked").attr("wid") == 5) {
            unitName="每"+unitName;
        }
        if($("#ways label input:checked").attr("wid") == 2){
            dec="到期归还艾特租，提前退还需补缴70%剩余租金";
        } else if ($("#ways label input:checked").attr("wid") == 3) {
            dec="到期归承租方";
        } else if ($("#ways label input:checked").attr("wid") == 5) {
            dec="到期归还艾特租";
        } else if ($("#ways label input:checked").attr("wid") == 1) {
            dec="到期归还艾特租，6个月后可随时退还";
        } else if ($("#ways label input:checked").attr("wid") == 6) {
            dec="到期归还艾特租，租期满"+bperiod+"个月后可免费随时退还，未满"+bperiod+"个月退还需补缴部分租金）";
        } else{
            dec="";
        }
        var curRentStr="";
        curRentStr="<p class=\"rent-text1\">"+unitName+"租金<span class=\"rent-price color-default\">"+Number(getRentPrice($("#ways label input:checked").attr("wid"), price, bprice))+"</span>元 ,租期 <span class=\"color-default\">"+aperiod+"</span> "+unitName2+"<em>"+getWayName($("#ways label input:checked").attr("wid"))+"</em></p>";
        curRentStr+="<p class=\"rent-text2\">\n";
        if (!bperiod || bperiod == 0) {
            curRentStr+="平均"+unitName+"租金："+Number(price || 0).toFixed(2)+"元";
        } else {
            curRentStr+="平均"+unitName+"租金："+Number(((bprice*bperiod)+(oprice*(aperiod-bperiod)))/aperiod).toFixed(2)+"元";
        }
        if (bperiod == 0 || !bperiod) {
            curRentStr+="，1-"+aperiod+"期："+price+"元/"+unitName;
        } else {
            curRentStr+="，1-"+bperiod+"期："+(bprice || 1)+"元/"+unitName;
        }
        if (!!bperiod && (bperiod < parseInt(aperiod)) && (bperiod !== 0 && bperiod !== '0')) {
            curRentStr+="，"+(aperiod - bperiod)+"-"+(aperiod)+"期："+oprice+"元/"+unitName;
        }
        if(dec) {
            curRentStr+="，"+dec;
        }
        curRentStr+="</p>";
        $("#curRent").html(curRentStr);
        curRentStr=null;
        productCalculator();
    }
    price=null;
    aperiod=null;
    bperiod=null;
    bprice=null;
    oprice=null;

    new rolldate.Date({
        el:'#beginDate',
        format:'YYYY-MM-DD',
        beginYear:new Date(minDate).getFullYear(),
        value: minDate,
        endYear:new Date(maxDate).getFullYear(),
        confirmBefore:function(el,date){
            if (date) {
                var day = date.split("-");
                if (day.length>=3 && day[2]>=29){
                    _layer.alert("29,30,31号不能选哦");
                    return false;
                }
            }
            if (new Date((date).replace(/-/ig,"/")).getTime()>=new Date((maxDate).replace(/-/ig,"/")).getTime() || new Date((date).replace(/-/ig,"/")).getTime()<new Date((minDate).replace(/-/ig,"/")).getTime()) {
                _layer.alert("请选择距离当前时间一月之内的日期");
                return false;
            }
        },
    });
    function dateReg (date) {
        /**日期格式**/
        if (date<10) {
            date="0"+date;
        }
        return date;
    }
}
function opNum() {
    /**数量操作**/
    $("#numOp .subtract").click(function () {
        $("#spinner").val($("#spinner").val() && parseInt($("#spinner").val())>1?parseInt($("#spinner").val())-1:1);
        /**更新选择数量**/
        $(".select-num").text($("#spinner").val());
        $(this).blur();
        productCalculator();
    });
    $("#numOp .add").click(function () {
        if (checkRestnum()) {
            $("#spinner").val(parseInt($("#spinner").val())+1);
            /**更新选择数量**/
            $(".select-num").text($("#spinner").val());
        }
        $(this).blur();
        productCalculator();
    });
    $("#spinner").blur(function () {
        if (!checkRestnum()) {
            $("#spinner").val($("#istore").text());
        } else if (isNaN($("#spinner").val()) || $("#spinner").val()<1) {
            $("#spinner").val(1)
        }
        /**更新选择数量**/
        $(".select-num").text($("#spinner").val());
        productCalculator();
    });
    function checkRestnum() {
        // 获取库存数量
        var restnum = parseInt($("#istore").text());
        var num = parseInt($("#spinner").val());
        if (num>=restnum) {
            return false;
        } else {
            return true;
        }
    }
}
function productCalculator(type) {
    //计算
    var num = parseInt($("#spinner").val()), price =  Number($("#ways label input:checked").attr("pid") || productInfo.iprice);
    /**更新设备押金**/
    $("#bhold").text((num*(productInfo.iholdprice || $("#bhold").attr("holdprice") || 0)).toFixed(2));

    /***更新首期需支付租金***/
    var protectIprice = $("#protect input[type='checkbox']:checked").attr("data-price") || 0;
    var servicePrice = $("#service input[type='checkbox']:checked").attr("pr") || 0;
    var totalPrice = Number(protectIprice) + Number(servicePrice) +price;
    if (isNaN(totalPrice)) {
        totalPrice = 0.00;
    } else {
        totalPrice = totalPrice.toFixed(2);
    }
    $("#show_modal .price-number").text(price.toFixed(2));
    $("#firstmoney").text((totalPrice * num).toFixed(2));
        /**更新可免押金额度**/
        calculatorEcDeposit();
}
function calculatorEcDeposit() {
    if (productInfo.id) {
        // 获取总押金
        var zyj = Number(productInfo.iholdprice || $("#bhold").attr("holdprice"))*parseInt($("#spinner").val() || 0);
        if (!!!publicData.userData.depositDiscount || publicData.userData.depositDiscount<= 0) {
            /**无优惠，100%付押**/
            $("#rhold").text(0.00);
            $("#nhold").text(zyj.toFixed(2));
        } else if (publicData.userData.depositDiscount >= 100) {
            /**无减免折扣，享受押金额度减免**/
            if (productInfo.isnew == 1) {
                /**全新机**/
                if (Number(ecdeposit.depositNewUsable) > zyj) {
                    $("#rhold").text(zyj.toFixed(2));
                    $("#nhold").text(0.00);
                } else {
                    $("#rhold").text(Number(ecdeposit.depositNewUsable).toFixed(2));
                    $("#nhold").text((zyj - Number(ecdeposit.depositNewUsable)).toFixed(2));
                }
            } else {
                /**非全新机**/
                if (Number(ecdeposit.depositOldUsable) > zyj) {
                    $("#rhold").text(zyj.toFixed(2));
                    $("#nhold").text(0.00);
                } else {
                    $("#rhold").text(Number(ecdeposit.depositOldUsable).toFixed(2));
                    $("#nhold").text((zyj - Number(ecdeposit.depositOldUsable)).toFixed(2));
                }
            }
        } else {
            /**折扣减免**/
            var jm=(zyj*(publicData.userData.depositDiscount)/100).toFixed(2);
            if (jm<0) {
                jm=Number(0).toFixed(2);
            } else if (jm>zyj) {
                jm=(zyj).toFixed(2);
            }
            $("#rhold").text(jm);
            $("#nhold").text((zyj-jm).toFixed(2));
        }
    }
}
function cartBtn(type) {
    /**添加购物车事件**/
    if (type) {
        /**租赁商品添加购物车**/
        insertCart(true, "", function (e) {
            if (e) {
                _layer.confirm("商品已成功加入购物车",["去购物车结算","继续购物"],function () {
                    window.location.href="/cart/";
                });
            }
        })
    } else {
        var ele = $("#attach .group-center .item input[type='checkbox']:checked");
        var result={};
        ele.each(function () {
            var pId=$(this).attr("data-id");
            if (pId) {
                result[pId]=false;
                insertCart(false,pId, function () {
                    result[pId]=true;
                    var isgetRes = true;
                    Object.keys(result).forEach(function(key){
                        if (!result[key]) {
                            isgetRes=false;
                        }
                    });
                    if (isgetRes) {
                        _layer.confirm("商品已成功加入购物车",["去购物车结算","继续购物"],function () {
                            window.location.href="/cart/";
                        });
                    }
                    isgetRes=null;
                } )
            }
        });
        result.product=false;
        insertCart(true, "", function () {
            result.product=true;
            var isgetRes = true;
            Object.keys(result).forEach(function(key){
                if (!result[key]) {
                    isgetRes=false;
                }
            });
            if (isgetRes) {
                _layer.confirm("商品已成功加入购物车",["去购物车结算","继续购物"],function () {
                    window.location.href="/cart/";
                });
            }
            isgetRes=null;
        })
    }
}
function insertCart(type, id, call) {
    /**加入购物车**/
    if (isInvalid()) {
        _layer.confirm("你还未登录，请先登录再添加购物车",["立即登录","再等等"],function () {
            window.location.href="/login/?goPath="+window.location.href
        });
        return false;
    }
    var proData={};
    if (type) {
        /**添加租赁商品进购物车**/
        proData.xspid=productInfo.id;
        proData.xspnum=parseInt($("#spinner").val());
        proData.xstype=productInfo.xstype;
        proData.xsclid=$("#ways label input[type='radio']:checked").attr("data-id") || 0;
        proData.insureid=$("#protect input[type='checkbox']:checked").attr("data-id") || 0;
        proData.serviceid = $("#service input[type='checkbox']:checked").attr("data-id") || 0;
        proData.bdate = $("#beginDate").val();
        proData.ischecked = 1;
    } else {
        /**添加销售商品进购物车**/
        proData.xspid=id;
        proData.xspnum=1;
        proData.xstype=productInfo.xstype;
        proData.xsclid=0;
        proData.insureid=0;
        proData.serviceid=0;
        proData.bdate=$("#beginDate").val();
        proData.ischecked = 1;
    }
    proData.userid = publicData.userData.userId;
    requestApi({
        url: "/eccart/insertCart",
        type: "post",
        data: proData
    }, function (res) {
        if(res.code == 200) {
            getCartNum();
            call(true)
        }
    }, function (err) {
        if (err) {
            _layer.alert(err.message?err.message:"加入购物车失败");
        }
    })
}
productInit();
navFixed();