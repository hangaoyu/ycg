@extends('main.partials.app')

@section('content')
    {{--bannner--}}
    <section class="activity-detail-banner">
        <img src="/images/investor/01_banner.png" alt="">
    </section>
    <section class="activity-desrc">
        <div class="slogans center-block">
            <img id="slogan_logo" src="/images/slogan2.png" alt="">
            <h5>ACTIVITY OF THE PROCESS</h5>
            <h4>活动流程</h4>
            <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
        </div>
        <div class="activity-desrc-banner">
            <img src="/images/investor/d-pic.png" alt="">
            <p>大附件是开放和思考三方 而非解放路的烦恼卡萨丁基本是打发发生的龙卷风拉伸福利奶粉考试及部分考试的来得及够哦酸辣粉你的设计费 发 </p>
            <hr>
        </div>
    </section>
    <section class="active-contact">
        <div class="slogans center-block">
            <img id="slogan_logo" src="/images/slogan2.png" alt="">
            <h5>CONTACT INFORMATION</h5>
            <h4>联系方式</h4>
            <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
        </div>
        <div class="contact-social">
            <div class="social-item"><img src="/images/login/qq.png" alt=""></div>
            <div class="social-item"><img src="/images/login/wx.png" alt=""></div>
            <div class="social-item"><img src="/images/login/wb.png" alt=""></div>
        </div>
        <div class="contact-desr">
            <h4>公司地址:</h4>
            <h5>杭州市萧山区撒打算发</h5>
            <h4>联系电话</h4>
            <h5>24583257932759634</h5>
        </div>
        <hr>
    </section>
    <section class="active-message">
        <div class="join-message">
            <h1>留言板 <span>MESSAGE BOARD</span></h1>
            <textarea name="" id="join-message-text" cols="30" rows="10"></textarea>
            <div class="join-sub-button" style="background: url('/images/learnmore.png') no-repeat">
                提交留言
            </div>
        </div>
    </section>
@stop