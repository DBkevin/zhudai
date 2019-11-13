<!DOCTYPE html>
<html>

<head>
  <title>@yield('title', 'Weibo App')-惠趣租</title>
  <link rel="stylesheet" href="/css/app.css">
  @yield('styles')
  <script src="/js/app.js"></script>
  <script>
    try {
    var urlhash = window.location.hash;
    if (!urlhash.match("fromapp")) {
        if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios|iPad)/i))) {
            window.location = "http://m.huiqushi.cn";
        }
    }
}
catch (err) {
}
  </script>
</head>
<body>
    @yield('content')
    @include('layouts._footer')
</body>
@yield('scripts')

</html>