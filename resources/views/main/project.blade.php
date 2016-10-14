@extends('layouts.app')

@section('content')
    <div class="project">
        <section class="project-banner">
            <img src="/images/project/banner.png" alt="">
        </section>
        <section class="project-desrc">
            <div class="project-container">
                <img src="/images/project/logo.png" alt="">
                <p>
                    棉联网是一家在棉花现货B2B交易平台，平台实现棉花资源实时查
                    询、在线撮合交易、现货商城代理销售、物流配送、数据资讯与
                    线上融资等线上交易服务。隶属于上海棉联电子商务有限公司。

                    上海棉联电子商务有限公司构建运营的“棉联”电商平台于2015年
                    8月上线试运营，通过联合棉花产业链上下游各方优势资源，打造
                    棉花 现货B2B交易平台实现棉花资源实时查询、在线撮合交易、
                    物流配送、现货商城代理销售、信息资讯和线上融资等线上交易服
                    务，解决棉花流通环节中的信息不对称和配套服务不完善的问题，
                    帮助购、销双方及经营者最大限度地节约成本、提高效率，高效快
                    捷地完成交易交收全过程，促进棉花产业链信息流、资金流和物流
                    的高度集中与资源的优化配置，重构棉花产业链价值体系，实现产
                    业运作模式的深度转型。

                </p>
            </div>
        </section>
        <section class="project-type">
            {{--<div class="tabbable"> <!-- Only required for left/right tabs -->--}}
            {{--<ul class="nav nav-tabs">--}}
            {{--<li class="active"><a href="#tab1" data-toggle="tab">公司动态 Company News</a></li>--}}
            {{--<li><a href="#tab2" data-toggle="tab">工商信息 Business Information</a></li>--}}
            {{--<li><a href="#tab3" data-toggle="tab"> 融资历程  Financing proces</a></li>--}}
            {{--</ul>--}}
            {{--<div class="tab-content">--}}
            {{--<div class="tab-pane active" id="tab1">--}}
            {{--<p>I'm in Section 1.</p>--}}
            {{--</div>--}}
            {{--<div class="tab-pane" id="tab2">--}}
            {{--<p>Howdy, I'm in Section 2.</p>--}}
            {{--</div>--}}
            {{--<div class="tab-pane" id="tab3">--}}
            {{--<p>Howdy, I'm in Section 3.</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}

            <ul>
                <li id="p-company-news" class=" p-li-active">公司动态 Company News
                <div class="p-line"></div></li>
                <li id="p-business-info">工商信息 Business Information
                    <div class="p-line"></div></li>
                <li id="p-financing-process">融资历程 Financing process
                    <div class="p-line"></div></li>
            </ul>
            <div class="type-container">
                <div class="p-company">
                    <div class="slogans center-block">
                        <img id="slogan_logo" src="/images/slogan2.png" alt="">
                        <h5>ADASFSDFDSFSdsadasD</h5>
                        <h4>公司动态</h4>
                        <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
                    </div>

                    <div class="company-items">
                        <div class="company-item">

                            <h5>2016-10-09</h5>
                            <h4><span>面联网</span> 公布新的一轮融资：棉联网完成B轮融资,金额未公开,投资方未透露。</h4>
                            <div style="clear: both"></div>
                        </div>
                        <div class="company-item">
                            <h5>2016-10-09</h5>
                            <h4><span>面联网</span> 公布新的一轮融资：棉联网完成B轮融资,金额未公开,投资方未透露。</h4>
                            <div style="clear: left"></div>
                        </div>
                        <div class="company-item">
                            <h5>2016-10-09</h5>
                            <h4><span>面联网</span> 公布新的一轮融资：棉联网完成B轮融资,金额未公开,投资方未透露。</h4>
                            <div style="clear: left"></div>
                        </div>
                        <div class="company-item">
                            <h5>2016-10-09</h5>
                            <h4><span>面联网</span> 公布新的一轮融资：棉联网完成B轮融资,金额未公开,投资方未透露。</h4>
                            <div style="clear: left"></div>
                        </div>
                    </div>
                </div>
                <div class="p-business">
                    <div class="slogans center-block">
                        <img id="slogan_logo" src="/images/slogan2.png" alt="">
                        <h5>ADASFSDFDSFSdsadasD</h5>
                        <h4>工商信息</h4>
                        <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
                    </div>
                    <div class="business-container">
                        <h4><span> 注册号 </span> 310115002724184</h4>
                        <h4><span> 经营状态</span> 存续(在营、开业、在册)</h4>
                        <h4><span> 法定代表</span>文龙</h4>
                        <h4><span> 股东:</span>
                            <p> 北京慧聪再创科技有限公司 <br>北京文龙科技发展中心（有限合伙）<br>
                                龚文龙</p></h4>
                        <div style="clear: both"></div>
                        <h4><span> 公司类型</span> 有限责任公司</h4>
                        <h4><span> 成立日期 </span> 2015-06-25</h4>
                        <h4><span> 注册资本 </span> 117.65万人民币</h4>
                        <h4><span> 住所 </span> 上海市浦东新区康新公路3399弄25号楼4层435室</h4>
                    </div>
                </div>
                <div class="p-process">
                    <div class="slogans center-block">
                        <img id="slogan_logo" src="/images/slogan2.png" alt="">
                        <h5>ADASFSDFDSFSdsadasD</h5>
                        <h4>融资历程</h4>
                        <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">

                    </div>
                    <div class="process-table">
                    <table >
                        <tr>
                            <th>阶段</th>
                            <th>融资金额</th>
                            <th>投资方</th>
                            <th>融资时间</th>
                        </tr>

                        <tr>
                            <td>天使轮</td>
                            <td>500万人民币</td>
                            <td>慧聪网</td>
                            <td>2016-03-10</td>
                        </tr>

                        <tr>
                            <td>天使轮</td>
                            <td>500万人民币</td>
                            <td>慧聪网</td>
                            <td>2016-03-10</td>
                        </tr>

                    </table>
                    </div>
                </div>
            </div>
        </section>

    </div>


@stop