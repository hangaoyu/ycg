@extends('layouts.app')

@section('content')
    {{--bannner--}}
    <section class="investor-banner pjax">
        <img id="banner-img" src="/images/investor/01_banner.png" alt="">
        <a href="/investor_hospital_detail">
            <div class="bottom-container ">
                <div class="bottom-item animated ">
                    <div class="title">
                        <h3>医创论坛</h3>
                        <h4>DSSFJDSGLKDGJFGJLFDJGFL</h4>
                        <h5>来自按时发生的国发股份啊</h5>
                    </div>
                </div>
                <div class="bottom-item-right animated ">
                    <img id="bottom-icon" src="/images/investor/white_icon.png" alt="">
                </div>
            </div>
        </a>
    </section>
    {{--session-image--}}
    <section class="investor-images">
        <div class="container">
            <div class="investor-category" style="background: url('/images/investor/pic1.png')">
                <div class="investor-category-right pjax">
                    <a href="/investor_hospital_detail">
                        <img class="investor-category-bt" src="/images/investor/bt.png" alt="">
                        <hr>
                        <h3>医学论坛 <img src="/images/investor/icon.png"></h3>
                        <p>的飒飒浪费和收款方从安抚发多少但是的飒飒浪费和收款方从安抚发多少但是的飒飒浪费和收款方从安抚发多少但是放大发发</p>
                    </a>
                </div>
            </div>
            <div class="investor-category " style="background: url('/images/investor/pic1.png')">
                <div class="investor-category-right pjax" style="left: 30px">
                    <a href="/investor_training_detail">
                        <img class="investor-category-bt" src="/images/investor/bt.png" alt="">
                        <hr>
                        <h3>投资人训练营 <img src="/images/investor/icon.png"></h3>
                        <p>的飒飒浪费和收款方从安抚发多少但是的飒飒浪费和收款方从安抚发多少但是的飒飒浪费和收款方从安抚发多少但是放大发发</p>
                    </a>
                </div>
            </div>
            <div class="investor-category" style="background: url('/images/investor/pic1.png')">
                <div class="investor-category-right pjax">
                    <a href="/investor_bussiness_detail">
                        <img class="investor-category-bt" src="/images/investor/bt.png" alt="">
                        <hr>
                        <h3>商务合作入口 <img src="/images/investor/icon.png"></h3>
                        <p>的飒飒浪费和收款方从安抚发多少但是的飒飒浪费和收款方从安抚发多少但是的飒飒浪费和收款方从安抚发多少但是放大发发</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
@stop