<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    csrf--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'LaraBBS')</title>
    <link rel="stylesheet" href="css/style.css">
    @yield('styles')
</head>
<body>
<div id="app">
{{--    通用 header 头--}}
    @include('layouts._header')

    <div class="container">
        @yield('content')
    </div>
{{--    通用 footer 尾--}}
    @include('layouts._footer')
</div>
{{-- 通用打包 js --}}
<script src="js/app.js"></script>

{{-- 如果页面中需要写入 js --}}
@yield('scripts')
</body>
</html>
