<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
    @yield('styles')
    <script src="/js/app.js"></script>
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