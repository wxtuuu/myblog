<!DOCTYPE html>
<html lang="zh-CN">
<head>
    @yield('head')
</head>
<body>
    @yield('nav')
    <div class="row">
        <div class="col-sm-2">@yield('sidebar')</div>
        <div class="col-sm-9">@yield('content')</div>
    </div>
</body>
</html>