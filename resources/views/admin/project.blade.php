@extends('layouts.app')
@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row" style="margin: 20px 0">
            <div class=" col-md-2">
                <a href="/admin/project/create" id="create" type="button"
                   class="btn btn-primary ">新增项目</a>
            </div>
           {{--<projectsearchbar></projectsearchbar>--}}
        </div>
        <div class="row">
            @foreach($projects as $project)

                <div class="col-lg-3  col-sm-4 col-md-4">


                    <div class="contact-box center-version">
                        <div>
                            <deletebtn delete_id="{{$project->id}}" url="project" ></deletebtn>
                        </div>
                        <a href="/admin/project/{{$project->id}}">
                            <img alt="image" class="img-circle" src="{{$project->logo}}">
                            <h3 class="m-b-xs"><strong>项目名称:</strong></h3>
                            <div class="font-bold">{{$project->name}}</div>
                            <address class="m-t-md">
                                <strong>项目简介</strong><br>
                                <p class="project-desr">
                                    {{$project->body}} </p>
                            </address>
                        </a>
                        <div class="contact-box-footer">
                            <div>
                                <a href="/admin/project/{{$project->id}}" id="editorbtn" type="button"
                                   class="btn btn-primary btn-block">查看详情</a>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="">  {{$projects->links()}}</div>
    </div>
    </div>
@stop