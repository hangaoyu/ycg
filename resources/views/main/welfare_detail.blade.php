@extends('layouts.app')

@section('content')
    {{--bannner--}}
    <section class="activity-detail-banner">
        <img src="/images/welfare/01_banner.png" alt="">
    </section>
    <section class="activity-desrc">
        <div class="slogans center-block">
            <img id="slogan_logo" src="/images/slogan2.png" alt="">
            <h5>ADASFSDFDSFSdsadasD</h5>
            <h4>活动流程</h4>
            <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
        </div>
        <div class="activity-desrc-banner">
            <img src="/images/interact/pic.png" alt="">
            <p>大附件是开放和思考三方 而非解放路的烦恼卡萨丁基本是打发发生的龙卷风拉伸福利奶粉考试及部分考试的来得及够哦酸辣粉你的设计费 发 </p>
            <hr>
        </div>
    </section>
    <section class="active-contact">
        <div class="slogans center-block">
            <img id="slogan_logo" src="/images/slogan2.png" alt="">
            <h5>ADASFSDFDSFSdsadasD</h5>
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

    </section>
    <section class="active-apply">
        <div class="slogans center-block">
            <img id="slogan_logo" src="/images/slogan2.png" alt="">
            <h5>ADASFSDFDSFSdsadasD</h5>
            <h4>我要报名</h4>
            <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
        </div>
        <div class="active-apply-container">

            <form action="" method="post">
                <div class="form-item">
                    <label for="user">姓名:</label>
                    <input type="text" id=user name="user" value=""/><br/>
                </div>
                <div class="form-item">

                    <label for="email">手机号码:</label>
                    <input type="text" id=email name="email" value=""/><br/>
                </div>
                <div class="form-item">
                    <label for="email">常用邮箱:</label>
                    <input type="text" id=email name="email" value=""/><br/>
                </div>
                <div class="form-item">
                    <div id="sbutton">提交表格</div>
                    <br/>
                </div>
            </form>
        </div>
    </section>
@stop