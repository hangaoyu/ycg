@extends('main.partials.app')
@section('content')
    {{--轮播图--}}

    <section>
        <img class="home-banner" src="/images/01_banner.png" alt="">
        <div class="banner-word">
            <h1>让创业奔跑</h1>
            <div class="banner-button pjax">
                <p> 云创谷
                </p>
                <h4><a href="/about">查看详情</a></h4>
            </div>
        </div>
    </section>
    {{--成果展示--}}
    <section class="results">
        <div class="container">
            <div class="slogans center-block">
                <img id="slogan_logo" src="/images/slogan2.png" alt="">
                <h5>INCUBATOR ACHIEVEMENTS EXHIBITION</h5>
                <h4>云创谷孵化成果展示</h4>
                <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
            </div>
            <div class="row">
                @foreach($projects as $project)
                    <div class="result-item">
                        <a href="{{url('project/'.$project->id)}}" target="_blank"><img src="{{$project->logo}}" alt="">
                            <div class="result-item-title">
                                <div id="result-line"></div>
                                {{$project->name}}
                            </div>
                            <div class="result-item-word"><p>{{$project->desrc}}</p></div>
                        </a>
                    </div>
                @endforeach
            </div>
            {{--<div class="result-scroll">--}}
            {{--<div class="result-scroll-img">--}}
            {{--<img src="/images/h-left.png" alt="">--}}
            {{--<a href="/more_project">  <img src="/images/h-result-more.png" alt=""></a>--}}
            {{--<img src="/images/h-right.png" alt="">--}}
            {{--</div>--}}


            {{--</div>--}}
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
                    @foreach($finances as $finance)
                        <div class="finance-item">
                            <div class="finance_img">
                                <img src="{{$finance->imgsrc}}">
                            </div>
                            <div class="finance-desrc">
                                <h4><a href="{{url('finance/'.$finance->id)}}"><strong>{{$finance->title}}</strong></a></h4>
                                <p>{{$finance->desrc}}</p>
                                <div id="news-from">{{$finance->time}}<span>{{$finance->author}}</span></div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="news-dynamic">
                    <h1>云创谷融资信息</h1>
                    <div class="dynamic-item">
                        <p>浙江省额外企鹅我浙江省额外企鹅我去的说法氛围让去的说法氛围让</p>
                        <div id="finance-from"><span>12312424215</span>阿萨德撒撒欢发撒</div>
                        <hr>
                    </div>
                    <div class="dynamic-item">
                        <p>浙江省额外企鹅我浙江省额外企鹅我去的说法氛围让去的说法氛围让</p>
                        <div id="finance-from"><span>12312424215</span>阿萨德撒撒欢发撒</div>
                        <hr>
                    </div>
                    <div class="dynamic-item">
                        <p>浙江省额外企鹅我浙江省额外企鹅我去的说法氛围让去的说法氛围让</p>
                        <div id="finance-from"><span>12312424215</span>阿萨德撒撒欢发撒</div>
                        <hr>
                    </div>
                    <div class="dynamic-item">
                        <p>浙江省额外企鹅我浙江省额外企鹅我去的说法氛围让去的说法氛围让</p>
                        <div id="finance-from"><span>12312424215</span>阿萨德撒撒欢发撒</div>
                        <hr>
                    </div>
                    <div class="dynamic-button" style="background: url('/images/learnmore.png') no-repeat">
                        <a href="">查看更多</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--创业导师--}}
    <section class="teacher" style="background: url('/images/teacherback.png') ">
        <div class="container">
            <div class="slogans center-block">
                <img id="slogan_logo" src="/images/sloganw1.png" alt="">
                <h5 style="color: white">BUSINESS MENTOR ACADEMIC MASTERS</h5>
                <h4 style="color: white">云创谷创业创业导师/学术大咖</h4>
                <img class="center-block" id="slogan_line" src="/images/sloganw2.png" alt="">
            </div>
        </div>
        <div class="col-sm-8 col-sm-offset-2">
            <div id="teacher-carousel" style="margin-top: 10px" class="carousel slide">
                <!-- Carousel items -->
                <div class="carousel-inner">
                    @foreach($teachers->chunk(4) as $key=>$row)
                        @if($key == 0)
                            <div class="active item  " style="">
                                <div class="row">
                                    @foreach($row as $teacher)
                                        <div class="col-sm-6 col-md-3">
                                            <div class="thumbnail teacher-item">
                                                <img src="{{$teacher->avatar}}">
                                                <div class="caption" style="overflow: hidden;height: 200px">
                                                    <h3>{{$teacher->name}} </h3>
                                                    <h3><span >{{$teacher->job}}</span></h3>
                                                    <h5>{{$teacher->e_name}} </h5>
                                                    <p>{{$teacher->desrc}}</p>
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
                                                <div class="caption" style="overflow: hidden;height: 200px">
                                                    <h3>{{$teacher->name}} </h3>
                                                    <h3><span >{{$teacher->job}}</span></h3>
                                                    <h5>{{$teacher->e_name}} </h5>
                                                    <p>{{$teacher->desrc}}</p>
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
                        <li data-target="#teacher-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#teacher-carousel" data-slide-to="1"></li>
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
    <section class="event" style="background: url('/images/eventback.png')">
        <div class="container">
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
                @foreach($events as $key => $event)
                    @if($key%2 == 0)
                        <div class="main-event-right animated">
                            <img src="{{$event->imgsrc}}" alt="">
                            <div class="event-desrc">
                                <span>{{$event->time}}</span>
                                <p>{{$event->detail}}</p>
                            </div>
                            <div style="clear: both"></div>
                        </div>
                    @else
                        <div class="main-event-left animated">
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