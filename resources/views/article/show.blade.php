@extends('layouts.default')
@section('title',$new->title);
@section('styles')
<link rel="stylesheet" href="{{asset('css/article.css')}}">
@stop
@section('content')
<div class="atz-content">
    <div class="layout">
        <div class="atz-menu">
            <strong>服务中心</strong>
            <div class="group">
                <a artid="{{$top->id}}"  href="/article/{{$top->id}}">{{$top->title}}</a>
            </div>
            <div class="group">
                <span>租机说明</span>
                @foreach ($group_type1 as $item)
                <a artid="{{$item->id}}"  href="/article/{{$item->id}}">{{$item->title}}</a>
                @endforeach
                
            </div>
            <div class="group">
                <span id="kcenter">客服中心</span>
                <a artid="13" href="/article/13">费用说明</a>
                <a artid="14" href="/article/14">开取发票</a>
                <a artid="15" href="/article/15">常见问题</a>
                @foreach ($group_type2 as $item)
                    <a artid="{{$item->id}}"  href="/article/{{$item->id}}">{{$item->title}}</a>
                    @if ($item->title=="常见问题")
                    <div class="sub">
                        @foreach ($group_type3 as $item)
                        <a artid="{{$item->id}}"  href="/article/{{$item->id}}">{{$item->title}}</a>
                        @endforeach
                    </div>
                    @endif
                    @if($item->title=="售后服务")
                    <div class="sub">
                        @foreach ($group_type4 as $item)
                        <a artid="{{$item->id}}"  href="/article/{{$item->id}}">{{$item->title}}</a>
                        @endforeach
                    </div>
                    @endif
                    @if ($item->title=="支付问题")
                        <a artid="{{$item->id}}"  href="/article/{{$item->id}}">{{$item->title}}</a>
                    <div class="sub">
                        @foreach ($group_type5 as $item)
                        <a artid="{{$item->id}}"  href="/article/{{$item->id}}">{{$item->title}}</a>
                        @endforeach
                    </div>
                    @endif
                @endforeach
                </div>
            </div>
        </div>
        <div class="atz-article">
            <div class="atz-article-title">{{$new->title}}</div>
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