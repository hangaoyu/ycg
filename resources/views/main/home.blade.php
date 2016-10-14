@extends('layouts.app')

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
                <h5>ADASFSDFDSFSdsadasD</h5>
                <h4>云创谷孵化成果展示</h4>
                <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
            </div>
            <div class="row">
                <div class="result-item">
                    <a href="/project" target="_blank"><img src="/images/result1.png" alt="">
                        <div class="result-item-title">
                            <div id="result-line"></div>
                            投资项目
                        </div>
                        <div class="result-item-word"><p>内容描述内容描述内容描述内容描述内容描述内容描述内容描述</p></div>
                    </a>
                </div>
                <div class="result-item">
                    <a href="/project"  target="_blank"><img src="/images/result1.png" alt="">
                        <div class="result-item-title">
                            <div id="result-line"></div>
                            投资项目
                        </div>
                        <div class="result-item-word"><p>内容描述内容描述内容描述内容描述内容描述内容描述内容描述</p></div>
                    </a>
                </div>
                <div class="result-item">
                    <a href="/project" target="_blank"><img src="/images/result1.png" alt="">
                        <div class="result-item-title">
                            <div id="result-line"></div>
                            投资项目
                        </div>
                        <div class="result-item-word"><p>内容描述内容描述内容描述内容描述内容描述内容描述内容描述</p></div>
                    </a>
                </div>
                <div class="result-item">
                    <a href="/project" target="_blank"><img src="/images/result1.png" alt="">
                        <div class="result-item-title">
                            <div id="result-line"></div>
                            投资项目
                        </div>
                        <div class="result-item-word"><p>内容描述内容描述内容描述内容描述内容描述内容描述内容描述</p></div>
                    </a>
                </div>
                <div class="result-item">
                    <a href="/project" target="_blank"><img src="/images/result1.png" alt="">
                        <div class="result-item-title">
                            <div id="result-line"></div>
                            投资项目
                        </div>
                        <div class="result-item-word"><p>内容描述内容描述内容描述内容描述内容描述内容描述内容描述</p></div>
                    </a>
                </div>
                <div class="result-item">
                    <a href="/project" target="_blank"><img src="/images/result1.png" alt="">
                        <div class="result-item-title">
                            <div id="result-line"></div>
                            投资项目
                        </div>
                        <div class="result-item-word"><p>内容描述内容描述内容描述内容描述内容描述内容描述内容描述</p></div>
                    </a>
                </div>
                <div class="result-item">
                    <a href="/project" target="_blank"><img src="/images/result1.png" alt="">
                        <div class="result-item-title">
                            <div id="result-line"></div>
                            投资项目
                        </div>
                        <div class="result-item-word"><p>内容描述内容描述内容描述内容描述内容描述内容描述内容描述</p></div>
                    </a>
                </div>
                <div class="result-item">
                    <a href="/project" target="_blank"><img src="/images/result1.png" alt="">
                        <div class="result-item-title">
                            <div id="result-line"></div>
                            投资项目
                        </div>
                        <div class="result-item-word"><p>内容描述内容描述内容描述内容描述内容描述内容描述内容描述</p></div>
                    </a>
                </div>
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
    <section class="news">
        <div class="container">
            <div class="slogans center-block">
                <img id="slogan_logo" src="/images/slogan2.png" alt="">
                <h5>ADASFSDFDSFSdsadasD</h5>
                <h4>云创谷产业动态/融资信息</h4>
                <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
            </div>
        </div>
        <div class="container-fluid">
            <div class="news-container">
                <div class="news-dynamic">
                    <div class="dynamic-item">
                        <div class="dynamic_img">
                            <img src="/images/news1.png">
                        </div>
                        <div class="dynamic-desrc">
                            <h4>阿萨德撒撒欢发撒</h4>
                            <p>阿萨德撒撒欢发撒阿萨德撒撒欢发撒阿萨德撒撒欢发撒阿萨德撒撒欢发撒阿萨德撒撒欢发撒阿萨德撒撒欢发撒</p>
                            <div id="news-from">阿萨德撒撒欢发撒<span>12312424215</span></div>
                        </div>
                    </div>
                    <div class="dynamic-item">
                        <div class="dynamic_img">
                            <img src="/images/news1.png">
                        </div>
                        <div class="dynamic-desrc">
                            <h4>阿萨德撒撒欢发撒</h4>
                            <p>阿萨德撒撒欢发撒阿萨德撒撒欢发撒阿萨德撒撒欢发撒阿萨德撒撒欢发撒阿萨德撒撒欢发撒阿萨德撒撒欢发撒</p>
                            <div id="news-from">阿萨德撒撒欢发撒<span>12312424215</span></div>
                        </div>
                    </div>
                    <div class="dynamic-item">
                        <div class="dynamic_img">
                            <img src="/images/news1.png">
                        </div>
                        <div class="dynamic-desrc">
                            <h4>阿萨德撒撒欢发撒</h4>
                            <p>阿萨德撒撒欢发撒阿萨德撒撒欢发撒阿萨德撒撒欢发撒阿萨德撒撒欢发撒阿萨德撒撒欢发撒阿萨德撒撒欢发撒</p>
                            <div id="news-from">阿萨德撒撒欢发撒<span>12312424215</span></div>
                        </div>
                    </div>
                </div>

                <div class="news-finance">
                    <h1>云创谷融资信息</h1>
                    <div class="finance-item">
                        <p>浙江省额外企鹅我浙江省额外企鹅我去的说法氛围让去的说法氛围让</p>
                        <div id="finance-from"><span>12312424215</span>阿萨德撒撒欢发撒</div>
                        <hr>
                    </div>
                    <div class="finance-item">
                        <p>浙江省额外企鹅我浙江省额外企鹅我去的说法氛围让去的说法氛围让</p>
                        <div id="finance-from"><span>12312424215</span>阿萨德撒撒欢发撒</div>
                        <hr>
                    </div>
                    <div class="finance-item">
                        <p>浙江省额外企鹅我浙江省额外企鹅我去的说法氛围让去的说法氛围让</p>
                        <div id="finance-from"><span>12312424215</span>阿萨德撒撒欢发撒</div>
                        <hr>
                    </div>
                    <div class="finance-item">
                        <p>浙江省额外企鹅我浙江省额外企鹅我去的说法氛围让去的说法氛围让</p>
                        <div id="finance-from"><span>12312424215</span>阿萨德撒撒欢发撒</div>
                        <hr>
                    </div>
                    <div class="finance-button" style="background: url('/images/learnmore.png') no-repeat">
                        <a href="">查看更多</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--创业导师--}}
    <section class="teacher" style="background: url('/images/teacherback.png')">
        <div class="container">
            <div class="slogans center-block">
                <img id="slogan_logo" src="/images/sloganw1.png" alt="">
                <h5 style="color: white">ADASFSDFDSFSdsadasD</h5>
                <h4 style="color: white">云创谷创业创业导师/学术大咖</h4>
                <img class="center-block" id="slogan_line" src="/images/sloganw2.png" alt="">
            </div>
        </div>
        <div class="col-sm-8 col-sm-offset-2">
            <div id="teacher-carousel" style="margin-top: 10px" class="carousel slide">
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item  " style="">

                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail teacher-item">
                                    <img src="/images/teacher1.png">
                                    <div class="caption">
                                        <h3>Thumbnail label <span>name</span></h3>
                                        <h5>Thumbnail </h5>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                                            non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                            vehicula ut id elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail teacher-item">
                                    <img src="/images/teacher1.png">
                                    <div class="caption">
                                        <h3>Thumbnail label <span>name</span></h3>
                                        <h5>Thumbnail </h5>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                                            non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                            vehicula ut id elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail teacher-item">
                                    <img src="/images/teacher1.png">
                                    <div class="caption">
                                        <h3>Thumbnail label <span>name</span></h3>
                                        <h5>Thumbnail </h5>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                                            non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                            vehicula ut id elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail teacher-item">
                                    <img src="/images/teacher1.png">
                                    <div class="caption">
                                        <h3>Thumbnail label <span>name</span></h3>
                                        <h5>Thumbnail </h5>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                                            non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                            vehicula ut id elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12" style="height: 68px"></div>
                    </div>
                    <div class="item">

                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail teacher-item">
                                    <img src="/images/teacher1.png">
                                    <div class="caption">
                                        <h3>Thumbnail label <span>name</span></h3>
                                        <h5>Thumbnail </h5>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                                            non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                            vehicula ut id elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail teacher-item">
                                    <img src="/images/teacher1.png">
                                    <div class="caption">
                                        <h3>Thumbnail label <span>name</span></h3>
                                        <h5>Thumbnail </h5>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                                            non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                            vehicula ut id elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail teacher-item">
                                    <img src="/images/teacher1.png">
                                    <div class="caption">
                                        <h3>Thumbnail label <span>name</span></h3>
                                        <h5>Thumbnail </h5>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                                            non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                            vehicula ut id elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail teacher-item">
                                    <img src="/images/teacher1.png">
                                    <div class="caption">
                                        <h3>Thumbnail label <span>name</span></h3>
                                        <h5>Thumbnail </h5>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                                            non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                            vehicula ut id elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12" style="height: 68px"></div>
                    </div>
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
                <h5>ADASFSDFDSFSdsadasD</h5>
                <h4>云创谷创业空间展示</h4>
                <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
            </div>
            <div class="col-sm-12 ">
                <div class="col-sm-4 area-item">
                    <img src="/images/area1.png" alt="">
                    <div class="area-item-title">
                        <h1>杭州地区</h1>
                        <h5>The Hangzhou</h5>
                        <h4>大大声点地方第三方第三方的</h4>
                    </div>
                </div>
                <div class="col-sm-4 area-item">
                    <img src="/images/area1.png" alt="">
                    <div class="area-item-title">
                        <h1>杭州地区</h1>
                        <h5>The Hangzhou</h5>
                        <h4>大大声点地方第三方第三方的</h4>
                    </div>
                </div>
                <div class="col-sm-4 area-item">
                    <img src="/images/area1.png" alt="">
                    <div class="area-item-title">
                        <h1>杭州地区</h1>
                        <h5>The Hangzhou</h5>
                        <h4>大大声点地方第三方第三方的</h4>
                    </div>
                </div>

            </div>

        </div>


    </section>
    {{--大事记--}}
    <section class="event" style="background: url('/images/eventback.png')">
        <div class="container">
            <div class="slogans center-block">
                <img id="slogan_logo" src="/images/slogan2.png" alt="">
                <h5>ADASFSDFDSFSdsadasD</h5>
                <h4>云创谷创业大事记</h4>
                <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
            </div>
            {{--<div>--}}
            {{--<img id="event_line" src="/images/line.png" alt="">--}}
            {{--</div>--}}
            <div class="event-container">
                <div class="main-event-right animated">
                    <img src="/images/event_pic1.png" alt="">
                    <div class="event-desrc">
                        <span>2016 9 3</span>
                        <p>大大技术来开发很舒服的大大技术来开发很舒服的会计部分操作会计部分操作</p>
                    </div>
                    <div style="clear: both"></div>
                </div>
                <div class="main-event-left animated">
                    <img src="/images/event_pic1.png" alt="">
                    <span>2016 9 3</span>

                    <p>大大技术来开发很舒服的会计部分操作大大技术来开发很舒服的会计部分操作</p>
                    <div style="clear: both"></div>
                </div>
                <div class="main-event-right animated">
                    <img src="/images/event_pic1.png" alt="">
                    <div class="event-desrc">
                        <span>2016 9 3</span>
                        <p>大大技术来开发很舒服的大大技术来开发很舒服的会计部分操作会计部分操作</p>
                    </div>
                    <div style="clear: both"></div>
                </div>
                <div class="main-event-left animated">
                    <img src="/images/event_pic1.png" alt="">
                    <span>2016 9 3</span>
                    <p>大大技术来开发很舒服的会计部分操作大大技术来开发很舒服的会计部分操作</p>
                    <div style="clear: both"></div>
                </div>
                <div class="main-event-right animated">
                    <img src="/images/event_pic1.png" alt="">
                    <div class="event-desrc">
                        <span>2016 9 3</span>
                        <p>大大技术来开发很舒服的大大技术来开发很舒服的会计部分操作会计部分操作</p>
                    </div>
                    <div style="clear: both"></div>
                </div>
            </div>
        </div>
    </section>
    {{--合作伙伴--}}
    <section class="partner">
        <div class="container">
            <div class="slogans center-block">
                <img id="slogan_logo" src="/images/slogan2.png" alt="">
                <h5>ADASFSDFDSFSdsadasD</h5>
                <h4>云创谷创业合作伙伴</h4>
                <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
            </div>
            <div class="col-sm-10 col-sm-offset-1 partner_logo_items">
                <div class="col-sm-2 col-xs-3 partner_logo_item"><img src="/images/p_logo.png" alt=""></div>
                <div class="col-sm-2 col-xs-3 partner_logo_item "><img src="/images/p_logo.png" alt=""></div>
                <div class="col-sm-2 col-xs-3 partner_logo_item "><img src="/images/p_logo.png" alt=""></div>
                <div class="col-sm-2 col-xs-3 partner_logo_item "><img src="/images/p_logo.png" alt=""></div>
                <div class="col-sm-2 col-xs-3 partner_logo_item "><img src="/images/p_logo.png" alt=""></div>
                <div class="col-sm-2 col-xs-3 partner_logo_item "><img src="/images/p_logo.png" alt=""></div>
                <div class="col-sm-2 col-xs-3 partner_logo_item "><img src="/images/p_logo.png" alt=""></div>
                <div class="col-sm-2 col-xs-3 partner_logo_item "><img src="/images/p_logo.png" alt=""></div>
                <div class="col-sm-2 col-xs-3 partner_logo_item "><img src="/images/p_logo.png" alt=""></div>
                <div class="col-sm-2 col-xs-3 partner_logo_item "><img src="/images/p_logo.png" alt=""></div>
                <div class="col-sm-2 col-xs-3 partner_logo_item "><img src="/images/p_logo.png" alt=""></div>
                <div class="col-sm-2 col-xs-3 partner_logo_item "><img src="/images/p_logo.png" alt=""></div>
            </div>
        </div>

    </section>

@stop