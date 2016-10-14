@extends('layouts.app')

@section('content')
    {{--bannner--}}
    <section class="activity-detail-banner">
        <img src="/images/activity/01_banner.png" alt="">
    </section>
    {{--choice--}}
    <section class="activity-stage">
        <div class="slogans center-block">
            <img id="slogan_logo" src="/images/slogan2.png" alt="">
            <h5>ADASFSDFDSFSdsadasD</h5>
            <h4>活动流程</h4>
            <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
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
            {{--<div class="active-container-item" style="margin-bottom: 30px">--}}
            {{--<span>姓名</span>--}}
            {{--<input type="text">--}}
            {{--<div style="clear: both"></div>--}}
            {{--</div>--}}
            {{--<div class="active-container-item">--}}
            {{--<span>手机号码</span>--}}
            {{--<input type="text">--}}
            {{--<div style="clear: both"></div>--}}
            {{--</div>--}}
            {{--<div class="active-container-item">--}}
            {{--<span>常用邮箱</span>--}}
            {{--<input type="text">--}}
            {{--<div style="clear: both"></div>--}}
            {{--</div>--}}
            {{--<div>--}}
            {{----}}
            {{--</div>--}}
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
                <div  id="sbutton" >提交表格</div><br/>
                </div>
            </form>
        </div>
    </section>
@stop