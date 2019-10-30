
/*
*公共文件
* by hzn
* time 2019-3-11 14:35:40
 */

/*
*定义公共数据
*
*/
window.publicData = {
    sysinfo: {
        'name': '艾特租',
        'logo': '/static/images/atz_logo.png',
        'slogo': '/static/images/slogan.png',
        'telno': '4000-778-768',
        'skin': '00'
    },
    cookies: {
        token: "atzToken",
        userId: "atzUserId",
        username: "atzUsername",
        userInfo: "atzUserInfo",
        time: 1 * 11 - 0.1
    },
    imgParam: "?x-oss-process=image/resize,m_fixed,auto-orient,1",
    userData: {},
    staticSrc: $(".atz-footer").attr("data-url") || "",
    staticSrc2: $(".atz-footer").attr("data-url2") || "",
    ele: {
        navAllEle: "#comClass"
    },
    isLogin: false,
    wxPatTimer: null,
    logoutTimer: null
};

//设备检测
function detectmob() {
    try{
        if (navigator.userAgent.match(/Android/i)
            || navigator.userAgent.match(/webOS/i)
            || navigator.userAgent.match(/iPhone/i)
            || navigator.userAgent.match(/iPad/i)
            || navigator.userAgent.match(/iPod/i)
            || navigator.userAgent.match(/BlackBerry/i)
            || navigator.userAgent.match(/Windows Phone/i)
        ) {
            return true;
        } else {
            return false;
        }
    }catch (e) {
        return false;
    }
}

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
};
 //封装当前url
function navAll() {
    // 是否添加移入移出功能
    if (curUrl.path === "/") {
        $(publicData.ele.navAllEle).addClass("open");
        return false;
    }
    if (!$(publicData.ele.navAllEle).hasClass("open")) {
        $(publicData.ele.navAllEle).hover(function (e) {
            $(publicData.ele.navAllEle).find(".menu").slideDown(300);
        }, function (e) {
            $(publicData.ele.navAllEle).find(".menu").slideUp(100);
        });
    }
} // 右侧悬浮弹窗


function leftTc() {
    var leftNavHtml = '<div class="right-fixed-nav">' +
      '        <a href="javascript:void(0);" class="ico_01" id="udpop"></a>' +
        '        <a href="/cart/" class="ico_02"><em class="cartnum">0</em></a>' +
        '        <a href="javascript:void(0);" class="ico_04">' + '            <div>' + '                <img src="/images/wc_qrcode.jpg" alt="">' + '                <span>扫描二维码关注公众号</span>' + '            </div>' + '        </a>' + '        <a href="javascript:void(0);" class="ico_05" id="scrollTop"></a>' + '    </div>';
    $("body").append(leftNavHtml); // 返回顶部
    /** 获取屏幕高 **/
    try{
        if ($(window).height()>940) {
            $(".right-fixed-nav").css("top",($(window).height()-$(".right-fixed-nav").height())/2);
        } else if ($(window).height()<600) {
            $(".right-fixed-nav").css("top",-300);
        }
    }catch (e) {

    }
    $(document).on('click', '#scrollTop', function () {
        $('html, body').animate({
            scrollTop: 0
        });
    }); // 滚动条行为操作

    $(window).scroll(function () {
        if ($(window).scrollTop() > 670) {
            $(".right-fixed-nav").fadeIn();
        } else {
            $(".right-fixed-nav").hide();
        }
    });
} // 文件上传组件





/**搜索**/


function searchKeyword() {
    // 获取内容
    var keyWord = $("#searchparam").val();
    window.location.href = "/list/s" + (keyWord);
}

/**日期格式**/
function timeFormat(date) {
    if (date && date.split(" ").length > 0) {
        return date.split(" ")[0];
    } else {
        return "";
    }
}
function timeFormat2 (time, fmt) {
    if (time) {
        var newTime = new Date(time);
        var o = {
            "M+": newTime.getMonth() + 1,
            //月份
            "d+": newTime.getDate(),
            //日
            "h+": newTime.getHours(),
            //小时
            "m+": newTime.getMinutes(),
            //分
            "s+": newTime.getSeconds(),
            //秒
            "q+": Math.floor((newTime.getMonth() + 3) / 3),
            //季度
            "S": newTime.getMilliseconds() //毫秒

        };
        if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (newTime.getFullYear() + "").substr(4 - RegExp.$1.length));

        for (var k in o) {
            if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" + o[k]).length));
        }
        return fmt;
    }else{
        return "";
    }
};
/**获取日期**/
function timeDate(time) {
    if (!time) {
        time = new Date().getTime();
    }

    var timer = new Date(time);
    var year = timer.getFullYear();
    var month = timer.getMonth() + 1;
    var date = timer.getDate();

    if (month < 10) {
        month = "0" + month;
    }

    if (date < 10) {
        date = "0" + date;
    }

    return year + "-" + month + "-" + date;
}