try {
    $('#magnifier').magnifier();
} catch (err) { }

function navFixed() {
    var win = $(window);
    var statusNum = -1;
    var nav = $(".info .tabs .buttons");
    win.scroll(function () {
        if (win.scrollTop() > $(".info .tabs").offset().top) {
            nav.addClass('buttons-fixed');
        } else {
            nav.removeClass('buttons-fixed');
        }
    });
    nav.click(function () {
        $('html, body').animate({
            scrollTop: $(".info .tabs").offset().top
        });
    });
}

function moreRentShow() {
    /**更多租赁方式**/
    if ($("#ways .atz-radio-bar").is(':hidden')) {
        $("#ways .atz-radio-bar").show();
        $("#ways .atz-more-bar>a").text("收起");
    } else {
        $("#ways .atz-radio-bar").eq(0).siblings(".atz-radio-bar").hide();
        $("#ways .atz-more-bar>a").text("查看更多租赁方式");
    }
}
navFixed();
moreRentShow();
$("#bdateinput").show()
$(".tabs .buttons a").click(function () {
    var _this = $(this);
    _this.addClass("active").siblings().removeClass("active");

    $(".tabs .panels .panel").eq(_this.index()).addClass("active").siblings('.panel').removeClass("active");
});
 setrentTime();
/*selectWay();

function selectWay() {
    setrentTime();
    $("#ways .atz-radio-bar label span").unbind("click").click(function () {
        setTimeout(function () {
            setrentTime();
        }, 200);
    });
}*/
function setrentTime() {
    // 获取当前选中的租赁方式
    /*var wId = $("#ways dd .atz-radio-bar input:checked").attr("wid"),
        curTime = new Date(),
        minDate = "",
        maxDate = "";
        */

   /* if (wId == 4) {
        curTime = new Date(new Date().getTime() + 1000 * 60 * 60 * 24 * 1);
        minDate = curTime.getFullYear() + "-" + dateReg(curTime.getMonth() + 1) + "-" + dateReg(curTime.getDate());
    } else {
        //三天后起租
        curTime = new Date(new Date().getTime() + 1000 * 60 * 60 * 24 * 3);
        minDate = curTime.getFullYear() + "-" + dateReg(curTime.getMonth() + 1) + "-" + dateReg(curTime.getDate());
    }
    */

        curTime = new Date(new Date().getTime() + 1000 * 60 * 60 * 24 * 3);
        minDate = curTime.getFullYear() + "-" + dateReg(curTime.getMonth() + 1) + "-" + dateReg(curTime.getDate());
    if (curTime.getMonth() >= 11) {
        maxDate = curTime.getFullYear() + 1 + "-01" + "-" + dateReg(curTime.getDate());
    } else {
        maxDate = curTime.getFullYear() + "-" + dateReg(curTime.getMonth() + 2) + "-" + dateReg(curTime.getDate());
    }
    $("#beginDate").val(minDate);
    laydate.render({
        elem: '#beginDate',
        showBottom: false,
        min: minDate,
        max: maxDate,
        disableData: 28,
    });

    function dateReg(date) {
        /**日期格式**/
        if (date < 10) {
            date = "0" + date;
        }
        return date;
    }
}

