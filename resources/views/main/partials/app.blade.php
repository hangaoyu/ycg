<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="wb:webmaster" content="5f2f80f16b8f7ae8" />
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <meta name="Author" content="韩高宇" />
    <meta name="Copyright" content="网站版权" />
    <meta name="keywords" content="云创谷" />
    <meta name="description" content="大医疗" />
<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-pjax-version" content="{{ elixir('js/base.js') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{--<link rel="stylesheet" href="{{ elixir('css/style.css') }}">--}}
    {{--<link href="/css/style.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('/css/nprogress.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
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
<script src="{{ elixir('js/app.js') }}" ></script>
{{--<script src="{{ asset('js/app.js') }}" async="async"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" ></script>
<script src="//cdn.bootcss.com/jquery.pjax/1.9.6/jquery.pjax.min.js" ></script>
<script type="text/javascript" src="{{ asset('/js/nprogress.js') }}" async="async"></script>

<script src="{{ elixir('js/base.js') }}" async="async"></script>
{{--<script src="{{ asset('js/base.js') }}" async="async"></script>--}}

<script async="async">
    $(document).pjax('.pjax a', '#pjax-container');
    $(document).on('pjax:start', function () {
        NProgress.start();
//        // entrepreneur
//         var entrepreneur_banner = $('.entrepreneur-banner-word');
//         entrepreneur_banner.css({opacity: 1});
//         //investor
//         var investor_bannner_bottom = $('.bottom-container');
//         investor_bannner_bottom.css({opacity: 1});
    });
    $(document).on('pjax:end', function () {
        NProgress.done();
    });
    $(document).on("pjax:timeout", function (event) {
// 阻止超时导致链接跳转事件发生
        event.preventDefault()
    });
</script>
</body>
</html>