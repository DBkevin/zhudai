function getBanner() {
    var a = new Swiper(".atz-banner-swiper .swiper-container", {
        speed: 1000,
        autoplay: 3000,
        loop: true,
        autoplayDisableOnInteraction: false,
        pagination: ".atz-banner-swiper .swiper-pagination",
        paginationClickable: true,
    });
    $(".swiper-pagination .swiper-pagination-switch").each(function (b, c) {
        $(this).html($(".atz-banner-swiper .swiper-container .swiper-slide:not(.atz-banner-swiper .swiper-container .swiper-slide-duplicate)").eq(b).attr("data-title"))
    });
    $(".atz-banner-swiper").hover(function () {
        a.stopAutoplay()
    },
    function () {
            a.startAutoplay()
        })
}
function modalHot() {
    $("#hot img").lazyload();
    var b = new Swiper(".atz-hot-swiper .swiper-container", {
        slidesPerView: 5,
        simulateTouch: false
    });
    var a = $("#hot>a").length;
    $(".atz-hot-module .prev").click(function () {
        b.swipePrev();
        if ($(".atz-hot-swiper .swiper-container .swiper-slide-active").index() == 0) {
            $(".atz-hot-module .prev").addClass("swiper-button-disabled")
        } else {
            $(".atz-hot-module .prev").removeClass("swiper-button-disabled")
        }
        if ($(".atz-hot-swiper .swiper-container .swiper-slide-active").index() == a - 5) {
            $(".atz-hot-module .next").addClass("swiper-button-disabled")
        } else {
            $(".atz-hot-module .next").removeClass("swiper-button-disabled")
        }
    });
    $(".atz-hot-module .next").click(function () {
        b.swipeNext();
        if ($(".atz-hot-swiper .swiper-container .swiper-slide-active").index() == a - 5) {
            $(".atz-hot-module .next").addClass("swiper-button-disabled")
        } else {
            $(".atz-hot-module .next").removeClass("swiper-button-disabled")
        }
        if ($(".atz-hot-swiper .swiper-container .swiper-slide-active").index() == 0) {
            $(".atz-hot-module .prev").addClass("swiper-button-disabled")
        } else {
            $(".atz-hot-module .prev").removeClass("swiper-button-disabled")
        }
    })
}
function indexEnv() {
    $("#env img").lazyload()
}
function partner() {
    $(".partner img").lazyload();
    var b = $(".atz-partner-module .partner ul>li");
    if (b.length <= 12) {
        return false
    }
    var d = b.length,
        c = 1;
    var a = Math.ceil(d / 12);
    $("#partnerChange").click(function () {
        if (c == a) {
            c = 1
        } else {
            c += 1
        }
        $(".partner ul>li").hide();
        for (var e = 0; e < 12; e++) {
            $(".partner ul>li").eq((c - 1) * 12 + e).show(200)
        }
        $(".partner img").lazyload()
    })
}
function credit() {
    $(".credit img").lazyload()
}
function navFixed() {
    if ($(window).width() >= 1300) {
        $(".floor-nav").css({
            "left": ($(window).width() - 1200) / 2 - 75 + "px"
        })
    } else {
        $(".floor-nav").hide()
    }
    var d = $(".floor-nav");
    var a = $(".floor-nav a"),
        c = $("div[data-nav-type]"),
        b = a.length - 1;
    $(window).on("scroll",
        function () {
            if (c.length < 8) {
                c = $("div[data-nav-type]");
                return false
            }
            if ($(window).scrollTop() > 670) {
                d.addClass("atz-fixed");
                var g = $(window).scrollTop(),
                    e = b;
                for (; e > -1; e--) {
                    var f = c.eq(e);
                    if (g >= f.offset().top - 50) {
                        a.removeClass("active").eq(e).addClass("active");
                        break
                    }
                }
            } else {
                d.removeClass("atz-fixed")
            }
        });
    a.on("click",
        function (f) {
            f.preventDefault();
            var g = $(this);
            $("html, body").animate({
                "scrollTop": c.eq(g.index()).offset().top
            },
                500)
        })
}
$(".atz-nav .atz-nav-item").eq(1).find("a").eq(0).addClass("active").siblings().removeClass("active");
getBanner();
modalHot();
indexEnv();
partner();
credit();
navFixed();
$(window).resize(function () {
    if ($(window).width() >= 1300 && $(window).scrollTop() > 670) {
        $(".floor-nav").addClass("atz-fixed");
        $(".floor-nav").css({
            "left": ($(window).width() - 1200) / 2 - 75 + "px"
        })
    } else {
        $(".floor-nav").removeClass("atz-fixed")
    }
});
if ($(".top-notice").length > 0) {
    var notice = $(".top-notice");
    var closeTime = notice.attr("data-time");
    setTimeout(function () {
        notice.addClass("min")
    },
        closeTime);
    $(document).on("click", ".notice-close",
        function (a) {
            a.stopPropagation();
            notice.addClass("hide");
            setTimeout(function () {
                notice.remove();
                navFixed()
            },
                500)
        })
};