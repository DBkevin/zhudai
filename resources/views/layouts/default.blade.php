<!DOCTYPE html>
<html>

<head>
  <title>@yield('title'){{config('app.name')}}</title>
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
  @include('layouts._header')
  <div class="container">
    @yield('content')
    @include('layouts._footer')
  </div>
</body>
@yield('scripts')

</html>