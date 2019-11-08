!function (i) {
    function t(o) {
        if (s[o]) return s[o].exports;
        var h = s[o] = {i: o, l: !1, exports: {}};
        return i[o].call(h.exports, h, h.exports, t), h.l = !0, h.exports
    }

    var s = {};
    t.m = i, t.c = s, t.d = function (i, s, o) {
        t.o(i, s) || Object.defineProperty(i, s, {configurable: !1, enumerable: !0, get: o})
    }, t.n = function (i) {
        var s = i && i.__esModule ? function () {
            return i.default
        } : function () {
            return i
        };
        return t.d(s, "a", s), s
    }, t.o = function (i, t) {
        return Object.prototype.hasOwnProperty.call(i, t)
    }, t.p = "/", t(t.s = 7)
}({
    7: function (i, t, s) {
        "use strict";
        !function (i, t, s, o) {
            var h = function (i) {
                this.$elem = i, this.$smallBox = this.$elem.find(".small-box"), this.$smallBox_pic = this.$smallBox.find("img"), this.$smallBox_mask = this.$smallBox.find(".hover"), this.$thumbnailBox = this.$elem.find(".thumbnail-box"), this.$thumbnailBox_prev = this.$thumbnailBox.find(".btn-prev"), this.$thumbnailBox_next = this.$thumbnailBox.find(".btn-next"), this.$thumbnailBox_wrapper = this.$thumbnailBox.find(".wrapper"), this.$thumbnailBox_item = this.$thumbnailBox.find(".item"), this.$thumbnailBox_pic = this.$thumbnailBox.find("img"), this.$bigBox = this.$elem.find(".big-box"), this.$bigBox_pic = this.$bigBox.find("img")
            };
            h.prototype = {
                moveBigPic: function () {
                    var i = this.$smallBox_mask.position().left / (this.$smallBox.width() - this.$smallBox_mask.width()),
                        t = this.$smallBox_mask.position().top / (this.$smallBox.height() - this.$smallBox_mask.height()),
                        s = i * (this.$bigBox_pic.width() - this.$bigBox.width()),
                        o = t * (this.$bigBox_pic.height() - this.$bigBox.height());
                    this.$bigBox.scrollLeft(s).scrollTop(o)
                }, changeSrouce: function (i, t, b) {
                    this.$smallBox_pic.attr("src", t), this.$bigBox_pic.attr("src", b)
                }, setMask: function () {
                    var i = this.$smallBox.width() / (this.$bigBox_pic.width() / this.$bigBox.width()),
                        t = this.$smallBox.height() / (this.$bigBox_pic.height() / this.$bigBox.height());
                    this.$smallBox_mask.css({width: i, height: t})
                }, inital: function () {
                    var s = this;
                    this.$thumbnailBox_next.click(function () {
                        var i = s.$thumbnailBox_item.length - 5, t = 78 * i;
                        i > 0 && s.$thumbnailBox_wrapper.animate({marginLeft: -t})
                    }), this.$thumbnailBox_prev.click(function () {
                        s.$thumbnailBox_wrapper.animate({marginLeft: 0})
                    }), this.$thumbnailBox_item.mouseover(function () {
                        var t = i(this).attr("data-src");
                        var b = i(this).attr("data-src2") || t;
                        s.$thumbnailBox_item.removeClass("item-cur"), i(this).addClass("item-cur"), s.changeSrouce(i(this).index(), t, b)
                    }), this.$smallBox.hover(function () {
                        s.$bigBox.show(), s.$smallBox_mask.show(), s.setMask(), i(this).mousemove(function (o) {
                            var h = o || t.event, e = {
                                left: h.clientX - i(this).offset().left - s.$smallBox_mask.width() / 2,
                                top: h.clientY - i(this).offset().top - s.$smallBox_mask.height() / 2 + i(t).scrollTop()
                            };
                            e.left < 0 ? e.left = 0 : e.left > i(this).width() - s.$smallBox_mask.width() && (e.left = i(this).width() - s.$smallBox_mask.width()), e.top < 0 ? e.top = 0 : e.top > i(this).height() - s.$smallBox_mask.height() && (e.top = i(this).height() - s.$smallBox_mask.height()), s.$smallBox_mask.css(e), s.moveBigPic()
                        })
                    }, function () {
                        s.$smallBox_mask.hide(), s.$bigBox.hide()
                    })
                }, constructor: h
            }, i.fn.magnifier = function () {
                return new h(this).inital()
            }
        }(jQuery, window, document)
    }
});