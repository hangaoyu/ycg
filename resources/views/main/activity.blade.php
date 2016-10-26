@extends('main.partials.app')

@section('content')
    {{--bannner--}}
    <section class="activity-banner">
        <div id="myCarousel" class="carousel slide">
            <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/images/activity/01_banner.png" alt="First slide">
                </div>
                <div class="item">
                    <img src="/images/activity/01_banner.png" alt="Second slide">
                </div>
                <div class="item">
                    <img src="/images/activity/01_banner.png" alt="Third slide">
                </div>
            </div>

        </div>

    </section>
    {{--choice--}}
    <section class="activity-choice">
        <div class="slogans center-block">
            <img id="slogan_logo" src="/images/slogan2.png" alt="">
            <h5>ENTREPRENEURIAL ACTIVITY</h5>
            <h4>创业活动</h4>
            <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
        </div>
        <div class="activity-choice-nav">
            <ul>
                <li>活动一</li>
                <li>活动二</li>
                <li>活动三</li>
                <li>活动四</li>
                <li>活动五</li>
            </ul>
            <hr>
        </div>
        <div class="activity-choice-items">
            <div class="activity-choice-item pjax">
                <a href="/activity_detail">
                    <div class="item-pic">
                        <img src="/images/activity/pic-1.png" alt="">
                    </div>

                    <h3>
                        中国医疗按时打算发
                    </h3>
                    <div class="item-line"></div>
                    <h4>
                        什么什么酒店 <span>2016-10-12</span>
                    </h4>
                </a>
            </div>
            <div class="activity-choice-item">
                <a href="/activity_detail">
                <div class="item-pic">
                    <img src="/images/activity/pic-1.png" alt="">
                </div>
                <h3>
                    中国医疗按时打算发
                </h3>
                <div class="item-line"></div>
                <h4>
                    什么什么酒店 <span>2016-10-12</span>
                </h4>
                </a>
            </div>
            <div class="activity-choice-item">
                <a href="/activity_detail">
                <div class="item-pic">
                    <img src="/images/activity/pic-1.png" alt="">
                </div>
                <h3>
                    中国医疗按时打算发
                </h3>
                <div class="item-line"></div>
                <h4>
                    什么什么酒店 <span>2016-10-12</span>
                </h4>
                </a>
            </div>
            <div class="activity-choice-item">
                <a href="/activity_detail">
                <div class="item-pic">
                    <img src="/images/activity/pic-1.png" alt="">
                </div>
                <h3>
                    中国医疗按时打算发
                </h3>
                <div class="item-line"></div>
                <h4>
                    什么什么酒店 <span>2016-10-12</span>
                </h4>
                </a>
            </div>
            <div class="activity-choice-item">
                <a href="/activity_detail">
                <div class="item-pic">
                    <img src="/images/activity/pic-1.png" alt="">
                </div>
                <h3>
                    中国医疗按时打算发
                </h3>
                <div class="item-line"></div>
                <h4>
                    什么什么酒店 <span>2016-10-12</span>
                </h4>
                </a>
            </div>
        </div>
    </section>
@stop