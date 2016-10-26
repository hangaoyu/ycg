<nav>
    <div class="top">
        {{--<div class="top-line"></div>--}}
        <div class="header" style="background-color: white">
            @if(Auth::check()&&Auth::user()->type ==='user' )

                    <div class="header-btn has_login">{{Auth::user()->name}}</div>

            @else
                <div class="header-btn">
                    <div data-toggle="modal" id="sign-in-btn" data-target="#myModal" class="login-btn">
                        登录
                    </div>
                    <div data-toggle="modal" id="sign-up-btn" data-target="#myModal" class="login-btn">
                        注册
                    </div>
                </div>
            @endif
            {{--<div class="header-logo"><img src="/images/head_logo.png" alt=""></div>--}}
            {{--<div class= header-logo"><img src="/images/head_logo1.png" alt=""></div>--}}

        </div>

        <!-- 模态框（Modal） -->


        {{--<div class="login-modal">--}}
        {{--asdas--}}
        {{--</div>--}}

        <div style="background-color: #f0f1f2"><!-- Left Side Of Navbar -->
            <ul class="nav-menu pjax">
                <li><a href="{{ url('/') }}">HOME <p>首页</p></a></li>
                <li><a href="{{ url('/about') }}">ABOUT <p>关于我们</p></a></li>
                <li><a href="{{ url('/entrepreneur') }}">ENTREPRENEUR <p>创业者</p></a></li>
                <li><a href="{{ url('/investor') }}">INVESTORS <p>投资人</p></a></li>
                <li>
                    <div id="nav-ks">
                        <div class="nav-icon"></div>
                        <div class="nav-icon2"></div>
                    </div>
                </li>
                <li><a href="{{ url('/activity') }}">ACTIVITY <p>活动报名</p></a></li>
                <li><a href="{{ url('/interact') }}">INTERACT <p>在线互动</p></a></li>
                <li><a href="{{ url('/welfare') }}">PUBLIC WELFARE <p>公益</p></a></li>
                <li><a href="{{ url('/join') }}">JOIN <p>加入我们</p></a></li>
            </ul>
            <!-- Right Side Of Navbar -->
        </div>
    </div>
</nav>
