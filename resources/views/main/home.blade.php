@extends('main.partials.app')
@section('content')
    {{--轮播图--}}

    <section>
        <img class="home-banner" src="/images/01_banner.png" alt="">
        {{--<div class="banner-word">--}}
        {{--<h1>让创业奔跑</h1>--}}
        {{--<div class="banner-button pjax">--}}
        {{--<p> 云创谷--}}
        {{--</p>--}}
        {{--<h4><a href="/about">查看详情</a></h4>--}}
        {{--</div>--}}
        {{--</div>--}}
    </section>
    {{--成果展示--}}
    <section class="results">
        <div>
            <div class="slogans center-block">
                <img id="slogan_logo" src="/images/slogan2.png" alt="">
                <h5>INCUBATOR ACHIEVEMENTS EXHIBITION</h5>
                <h4>云创谷孵化成果展示</h4>
                <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
            </div>
            <div class="result-container">
                <div class="result-items">


                    @foreach($projects as $project)
                        <div class="result-item">
                            <a href="{{url('project/'.$project->id)}}" target="_blank"><img src="{{$project->logo}}"
                                                                                            alt="">
                                <div class="result-item-title">
                                    <div id="result-line"></div>
                                    {{$project->name}}
                                </div>
                                <div class="result-item-word"><p>{{$project->desrc}}</p></div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="result-scroll">
                <div class="result-scroll-img">
                    <div class="arrow">
                        <img id="r_top" src="/images/arrow_left.png" alt="">
                    </div>
                    <div class="more">
                        <a href="/more_project"><img src="/images/h-result-more.png" alt=""></a>
                    </div>
                    <div class="arrow">
                        <img id="r_down" src="/images/arrow_right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--融资信息--}}
    <section class="news" style="">
        <div class="container">
            <div class="slogans center-block">
                <img id="slogan_logo" src="/images/slogan2.png" alt="">
                <h5>FINANCIAL INFORMATION/ INDUSTRY NEWS</h5>
                <h4>云创谷产业动态/融资信息</h4>
                <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
            </div>
        </div>
        <div class="container-fluid">
            <div class="news-container">
                <div class="news-finance">
                    <div class="finance-scroll-container">
                        @foreach($finances as $finance)
                            <div class="finance-item">
                                <div class="finance_img">
                                    <img src="{{$finance->imgsrc}}">
                                </div>
                                <div class="finance-desrc">
                                    <h4><a href="{{url('finance/'.$finance->id)}}"><strong>{{$finance->title}}</strong></a>
                                    </h4>
                                    <p>{{$finance->desrc}}</p>
                                    <div id="news-from">{{$finance->time}}<span>{{$finance->author}}</span></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="news-dynamic">
                    <h1>云创谷融资信息</h1>
                    <div class="dynamic-items">
                        <div class="dynamic-items-scroll">
                            @foreach($dynamics as $dynamic)
                                <div class="dynamic-item">
                                    <p>{{$dynamic->title}}</p>
                                    <h5 id="dynamic-from"><span>{{$dynamic->time}}</span>{{$dynamic->subtitle}}</h5>
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="finance-scroll">
            <div class="left_arrow"><img src="/images/arrow_left.png" alt=""></div>
            <div class="right_arrow"><img src="/images/arrow_right.png" alt=""></div>
        </div>
    </section>
    {{--创业导师--}}
    <section class="teacher" style="background: url('/images/teacher_back.jpg') ">
        <div class="container">
            <div class="slogans center-block">
                <img id="slogan_logo" src="/images/sloganw1.png" alt="">
                <h5 style="color: white">BUSINESS MENTOR ACADEMIC MASTERS</h5>
                <h4 style="color: white">云创谷创业创业导师/学术大咖</h4>
                <img class="center-block" id="slogan_line" src="/images/sloganw2.png" alt="">
            </div>
        </div>
        <div class="col-md-12 col-lg-10 col-lg-offset-1 ">
            <div id="teacher-carousel" style="margin-top: 10px" class="carousel slide">
                <!-- Carousel items -->
                <div class="carousel-inner">
                    @foreach($teachers->chunk(4) as $key=>$row)
                        @if($key == 0)
                            <div class="active item  ">
                                <div class="row">
                                    @foreach($row as $teacher)
                                        <div class="col-sm-6 col-md-3">
                                            <div class="thumbnail teacher-item">
                                                <img src="{{$teacher->avatar}}">
                                                <div class="caption">
                                                    <h3>{{$teacher->name}} </h3>
                                                    <h5><span>{{$teacher->job}}</span></h5>
                                                    <h5>{{$teacher->e_name}} </h5>
                                                    {!! $teacher->body !!}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-sm-12" style="height: 68px"></div>
                            </div>
                        @else
                            <div class="item">
                                <div class="row">
                                    @foreach($row as $teacher)
                                        <div class="col-sm-6 col-md-3">
                                            <div class="thumbnail teacher-item">
                                                <img src="{{$teacher->avatar}}">
                                                <div class="caption">
                                                    <h3>{{$teacher->name}} </h3>
                                                    <h5><span>{{$teacher->job}}</span></h5>
                                                    <h5>{{$teacher->e_name}} </h5>
                                                    {!! $teacher->body !!}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-sm-12" style="height: 68px"></div>
                            </div>
                        @endif
                    @endforeach
                    <ol class="carousel-indicators">
                        @foreach($teachers->chunk(4) as $key=>$row)
                            @if($key == 0)
                                <li data-target="#teacher-carousel" data-slide-to="0" class="active"></li>
                            @else
                                <li data-target="#teacher-carousel" data-slide-to="{{$key}}"></li>
                            @endif
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </section>
    {{--空间展示--}}
    <section class="area">
        <div class="container">
            <div class="slogans center-block">
                <img id="slogan_logo" src="/images/slogan2.png" alt="">
                <h5>ENTREPRENEURS DISPLAY SPACE</h5>
                <h4>云创谷创业空间展示</h4>
                <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
            </div>
            <div class="area-container ">
                @foreach($areas as $area)
                    <div class="area-item">
                        <img src="{{$area->imgsrc}}" alt="">
                        <div class="area-item-title">
                            <h1>{{$area->name}}</h1>
                            <h4>{{$area->address}}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{--大事记--}}
    <section class="event" style="background: url('/images/event_back.jpg')">
        <div>
            <div class="slogans center-block">
                <img id="slogan_logo" src="/images/slogan2.png" alt="">
                <h5>ENTREPRENEUR EVENT TIMEKINE </h5>
                <h4>云创谷创业大事记</h4>
                <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
            </div>
            <div>
                <img id="event_line" src="/images/line.png" alt="">
            </div>
            <div class="event-container">
                <div class="event-scroll">
                    @foreach($events as $key => $event)
                        @if($key%2 == 0)
                            <div class="main-event-right ">
                                <img src="{{$event->imgsrc}}" alt="">
                                <div class="event-desrc">
                                    <span>{{$event->time}}</span>
                                    <p>{{$event->detail}}</p>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        @else
                            <div class="main-event-left ">
                                <img src="{{$event->imgsrc}}" alt="">
                                <div class="event-desrc">
                                    <span>{{$event->time}}</span>
                                    <p>{{$event->detail}}</p>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{--合作伙伴--}}
    <section class="partner">
        <div class="container">
            <div class="slogans center-block">
                <img id="slogan_logo" src="/images/slogan2.png" alt="">
                <h5>VENTURE PARTNERS</h5>
                <h4>云创谷创业合作伙伴</h4>
                <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
            </div>
            <div class="col-sm-12  partner_logo_items">
                @foreach($partners as $partner)
                    <div class="col-sm-2 col-xs-3 partner_logo_item"><img src="{{$partner->imgsrc}}" alt=""></div>
                @endforeach
            </div>
        </div>
    </section>
@stop
@section('script')
    <script>


        //首页动态滚动
        var event_scroll_distance = -({{$event_count}}-5) * 160;
        var dynamic_scroll_distance = -({{$dynamic_count}} - 4) * 100;
        setTimeout(function () {
            $('.dynamic-items-scroll').css('margin-top', dynamic_scroll_distance);
        }, 100);
        setTimeout(function () {
            $('.dynamic-items-scroll').css('margin-top', 0);
        }, 9000);
        var dynamic_timer = setInterval(function () {
            $('.dynamic-items-scroll').css('margin-top', dynamic_scroll_distance);
            setTimeout(function () {
                $('.dynamic-items-scroll').css('margin-top', 0);
            }, 9000);
        }, 18000);

        $('.event-scroll').css('margin-top', event_scroll_distance);
        setTimeout(function () {
            $('.event-scroll').css('margin-top', 0);
        }, 6000);
        var event_timer = setInterval(function () {

            $('.event-scroll').css('margin-top', event_scroll_distance);
            setTimeout(function () {
                $('.event-scroll').css('margin-top', 0);
            }, 6000);
        }, 12000);
    </script>
@stop