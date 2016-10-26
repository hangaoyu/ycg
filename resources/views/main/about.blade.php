@extends('main.partials.app')

@section('content')
    {{--banner--}}
    <section class="about-banner">
        <img src="/images/about-banner.png" alt="">
    </section>
    {{--session-1--}}
    <section class="about-secion-1" style="background-color: #f9f9f9">
        <div class="about-desrc">
            <div id="about-bt1" class="animated ">
                <img src="/images/about-bt1.png" alt="">
            </div>
            <div id="about-bt2" class="animated " >
                <img src="/images/about-bt2.png" alt="">
            </div>
            <div id="about-ycg">
                <img id="" src="/images/about-desrc.png" alt="">
            </div>
            <div class="animated" id="about-yisheng">
                <img src="/images/about-yisheng.png" alt="">
            </div>
            <div id="about-detail" class="animated">
                <div id="about-logo">
                    <img src="/images/about-logo.png" alt="">
                    <h4>云创谷简介</h4>
                </div>
                <hr>
                <p>{!! $base->production !!}}</p>
            </div>
        </div>
    </section>
    {{--health-session--}}
    <section class="about-health">
        <div id="about-ycg-right">
            <img id="" src="/images/about-ycg-right.png" alt="">
        </div>
        <div id="about-bt3" class="animated">
            <img src="/images/about-bt3.png" alt="">
        </div>
        <div id="about-bt4" class="animated">
            <img src="/images/about-bt4.png" alt="">
        </div>
        <div id="about-women" class="animated">
            <img src="/images/about-women.png" alt="">
        </div>
        <div id="about-health-detail" class="animated">
            <div id="about-logo">
                <img src="/images/about-bigA.png" alt="">
                BOUT THE BIG-HEALTH
            </div>
            <hr>
            <p>{{$base->healthy}}</p>
        </div>
    </section>

    {{--event--}}
    <section style="background-color: #f9f9f9;height: 1300px">
        <div class="about-event">
            <div id="about-bt5" class="animated">
                <img src="/images/about-bt5.png" alt="">
            </div>
            <div id="about-bt6" class="animated">
                <img src="/images/about-bt3.png" alt="">
            </div>
            <div class="event-container">
                <div><img id="about-line" class="animated" src="/images/line.png" alt=""></div>
                @foreach($events as $key => $event)
                    @if($key%2 == 0)
                        <div class="event-right animated">
                            <img src="{{$event->imgsrc}}" alt="">
                            <div class="event-desrc">
                                <span>{{$event->time}}</span>
                                <p>{{$event->detail}}</p>
                            </div>
                            <div style="clear: both"></div>
                        </div>
                    @else
                        <div class="event-left animated">
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
@stop