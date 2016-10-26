@extends('main.partials.app')

@section('content')
    <div class="project">
        <section class="project-banner">
            <img src="/images/project/banner.png" alt="">
        </section>
        <section class="project-desrc">
            <div class="project-container">
                <img src="/images/project/logo.png" alt="">
                <p>
                    {{$project->body}}
                </p>
            </div>
        </section>
        <section class="project-type">


            <ul>
                <li id="p-company-news" class=" p-li-active">公司动态 Company News
                    <div class="p-line"></div>
                </li>
                <li id="p-business-info">工商信息 Business Information
                    <div class="p-line"></div>
                </li>
                <li id="p-financing-process">融资历程 Financing process
                    <div class="p-line"></div>
                </li>
            </ul>
            <div class="type-container">
                <div class="p-company">
                    <div class="slogans center-block">
                        <img id="slogan_logo" src="/images/slogan2.png" alt="">
                        <h5>COMPANY NEWS </h5>
                        <h4>公司动态</h4>
                        <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
                    </div>

                    <div class="company-items">
                        @foreach($project->dynamics as $dynamic)
                            <div class="company-item">
                                <h5 style="width: 80px">{{$dynamic->dynamic_type}}</h5>
                                <h4><span style="float: left">{{$project->name}}</span> {{$dynamic->dynamic_desrc}}</h4>
                                <div style="clear: both"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="p-business">
                    <div class="slogans center-block">
                        <img id="slogan_logo" src="/images/slogan2.png" alt="">
                        <h5>BUSINESS INFORMATION</h5>
                        <h4>工商信息</h4>
                        <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">
                    </div>
                    <div class="business-container">
                        <h4><span> 注册号 </span> {{$project->register_id}}</h4>
                        <h4><span> 经营状态</span> {{$project->state}}</h4>
                        <h4><span> 法定代表</span>{{$project->person}}</h4>
                        <h4><span> 股东:</span>
                            <p>
                                @foreach($project->holders as $holder)
                                    {{$holder->holder}} <br>
                                @endforeach
                            </p></h4>
                        <div style="clear: both"></div>
                        <h4><span> 公司类型</span> {{$project->type}}</h4>
                        <h4><span> 成立日期 </span> {{$project->create_at}}</h4>
                        <h4><span> 注册资本 </span> {{$project->capital}}</h4>
                        <h4><span> 住所 </span> {{$project->address}}</h4>
                    </div>
                </div>
                <div class="p-process">
                    <div class="slogans center-block">
                        <img id="slogan_logo" src="/images/slogan2.png" alt="">
                        <h5>FINANCING PROCESS</h5>
                        <h4>融资历程</h4>
                        <img class="center-block" id="slogan_line" src="/images/slogan1.png" alt="">

                    </div>
                    <div class="process-table">
                        <table>
                            <tr>
                                <th>阶段</th>
                                <th>融资金额</th>
                                <th>投资方</th>
                                <th>融资时间</th>
                            </tr>
                            @foreach($project->processes as $process)
                                <tr>
                                    <td>{{$process->state}}</td>
                                    <td>{{$process->money}}</td>
                                    <td>{{$process->investor}}</td>
                                    <td>{{$process->investe_time}}</td>
                                </tr>
                            @endforeach


                        </table>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script>

    </script>

@stop