<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">

            <div id="modal-btn-close"
                    data-dismiss="modal"><img src="/images/login/close.png" alt="">
            </div>
            <div class="modal-img">
                <img id="modal-pic" src="/images/login/01_pic.png" alt="">
                <img id="modal-pic-word" src="/images/login/01_pic_wenzi.png" alt="">
            </div>
            <div class="modal-right">
                <div class="modal-sign">
                    <div class="sign-in">SIGN IN
                    </div>
                    <div class="sign-up">SIGN UP
                    </div>
                    <div class="sign-line" style="clear: both"></div>
                </div>

                <div class="modal-signin-container">
                    <div class="sigin-item">
                        <h4>email address</h4>
                        <input type="text" placeholder="输入账号">
                        <div class="sign-line"></div>
                        <h4>password</h4>
                        <input type="password" placeholder="密码">
                        <div class="sign-line"></div>
                        {{--<h5 class="forget-pswd">忘记密码</h5>--}}
                        <div class="sigin-btn">SIGN IN</div>
                    </div>
                </div>

                <div class="modal-signup-container">
                    <div class="sigin-item">
                        <h4>email address</h4>
                        <input type="text" placeholder="输入账号">
                        <div class="sign-line"></div>
                        <h4>password</h4>
                        <input type="password" placeholder="密码">
                        <div class="sign-line"></div>

                        <div class="siginup-btn">SIGN UP</div>
                    </div>
                </div>
                {{--<div class="modal-forget-container">--}}
                    {{--<div class="sigin-item">--}}
                        {{--<h4>email address</h4>--}}
                        {{--<input type="text" placeholder="输入账号">--}}
                        {{--<div class="siginup-btn">提交验证</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


                <div class="modal-social">
                    <img src="/images/login/qq.png" alt="">
                    <img src="/images/login/wx.png" alt="">
                    <a href="{{url('/weibo')}}">  <img src="/images/login/wb.png" alt=""></a>

                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
