<!DOCTYPE html>
<html lang="zh-CN">

<head>
    @include('cus.head')
</head>

<body>
    <canvas id="bc" style="z-index:-1;position: fixed;"></canvas>
    @include('cus.menu')

    <div class="container-fluid">
        @yield('content')
    </div>
    @include('cus.js')
</body>

</html>