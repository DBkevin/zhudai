@extends('layouts.default')
@section('title',$new->title);
@section('styles')
<link rel="stylesheet" href="{{asset('css/article.css')}}">
@stop
@section('content')
<div class="atz-content">
    <div class="layout">
<div class="atz-menu">
    <strong>关于惠趣租</strong>
    <div class="group">
        <a artid="{{$new->id}}" href="/article/about" class="">公司概况</a>
        <a artid="{{$new->id}}" href="/article/concat" class="">联系我们</a>
        <a artid="{{$new->id}}" href="/article/news/" class="">媒体中心</a>
        <a artid="{{$new->id}}" href="/news/" class="">行业资讯</a>
        <a artid="{{$new->id}}" href="/article/cooperation" class="">商务合作</a>
    </div>
</div>
        <div class="atz-article">
            <div class="atz-article-content">
                {!!$new->body!!}
            </div>
    </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
window.parseUrl = function (url) {
    /**
     * @param {string} url 完整的URL地址
     * @return {object} 自定义的对象
     * @description 用法示例：var myURL = parseURL('http://abc.com:8080/dir/index.html?id=255&m=hello#top');
     * myURL.file='index.html'
     * myURL.hash= 'top'
     * myURL.host= 'abc.com'
     * myURL.query= '?id=255&m=hello'
     * myURL.params= Object = { id: 255, m: hello }
     * myURL.path= '/dir/index.html'
     * myURL.segments= Array = ['dir', 'index.html']
     * myURL.port= '8080'
     * myURL.protocol= 'http'
     * myURL.source= 'http://abc.com:8080/dir/index.html?id=255&m=hello#top'
     *
     **/
    var a = document.createElement('a');
    a.href = url;
    return {
        source: url,
        protocol: a.protocol.replace(':', ''),
        host: a.hostname,
        port: a.port,
        query: a.search,
        params: function () {
            var ret = {},
                seg = a.search.replace(/^\?/, '').split('&'),
                len = seg.length,
                i = 0,
                s;

            for (; i < len; i++) {
                if (!seg[i]) {
                    continue;
                }

                s = seg[i].split('=');
                ret[s[0]] = s[1];
            }

            return ret;
        }(),
        file: (a.pathname.match(/\/([^\/?#]+)$/i) || [, ''])[1],
        hash: a.hash.replace('#', ''),
        path: a.pathname.replace(/^([^\/])/, '/$1'),
        relative: (a.href.match(/tps?:\/\/[^\/]+(.+)/) || [, ''])[1],
        segments: a.pathname.replace(/^\//, '').split('/')
    };
};
var curUrl = parseUrl(window.location.href);
 if (curUrl.segments.length>1) {
        var id=curUrl.segments[1];
        $(".atz-menu .group").find("a[artid]").removeClass("active");
        $(".atz-menu .group").find("a[artid='"+id+"']").addClass("active");
    }
</script>
@endsection