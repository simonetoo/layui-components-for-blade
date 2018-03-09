<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>

    <!-- Title -->
    <title>@yield('title',config('app.name')) - {{config('app.title')}}</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('metas')

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico">


    <link type="text/css" rel="stylesheet" href="{{asset('assets/layui/css/layui.css')}}"/>
    @stack('styles')


    @stack('header-scripts')

</head>

<body id="@yield('body-id')" class="@stack('body-class')" class="@stack('body-style')" @stack('body-attr')>
    <main class=" layui-bg-black">
        @yield('body')
    </main>
    <script type="text/javascript" src="{{asset('assets/layui/layui.js')}}"></script>
    <script type="text/javascript">
        layui.use(['element', 'form'], function () {
        });
    </script>
@stack('scripts')
</body>
</html>