<!DOCTYPE html>
<html lang="en">
<head>
    <title>云创谷</title>
    <link rel="shortcut icon" href="/images/icon.png" type="image/x-icon"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="wb:webmaster" content="5f2f80f16b8f7ae8"/>
    <meta name="Author" content="韩高宇"/>
    <meta name="Copyright" content="网站版权"/>
    <meta name="keywords" content="云创谷"/>
    <meta name="description" content="大医疗"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
<div id="app">
    {{--@include('layouts.header')--}}
    @include('main.partials.nav')
    <div class="top-clear"></div>
    <div class="main-content" id="pjax-container">
        @yield('content')
    </div>
    @include('main.partials.footer')
</div>
@include('main.partials.login')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="//cdn.bootcss.com/jquery.pjax/1.9.6/jquery.pjax.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/nprogress.js') }}" async="async"></script>

<script async="async">
    $(document).pjax('.pjax a', '#pjax-container');
    $(document).on('pjax:start', function () {
        NProgress.start();
    });
    $(document).on('pjax:end', function () {
        NProgress.done();
    });
    $(document).on("pjax:timeout", function (event) {
        阻止超时导致链接跳转事件发生
        event.preventDefault()
    });
</script>
@yield('script')

</body>
</html>