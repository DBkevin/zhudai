<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="max-age=600000"/>
    <meta http-equiv="Window-target" content="_top"/>
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <meta name="format-detection" content="telphone=no, email=no"/>
    <title>@yield('title', 'Weibo App') - 租贷网</title>
    <link rel="stylesheet" href="/m/css/app.css">
    @yield('styles')
    <script src="/js/app.js"></script>
  </head>
  <body>
    <div class="container">
      @yield('content')
    </div>
  </body>
  @yield('scripts')
</html>