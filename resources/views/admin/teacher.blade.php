@extends('layouts.app')

@section('content')
    <div class="row" style="margin: 20px 0">
        <div class=" col-md-2">
            <a href="/admin/teacher/create" id="create" type="button"
               class="btn btn-primary ">新增项目</a>
        </div>
        {{--<projectsearchbar></projectsearchbar>--}}
    </div>
    <div class="row">
        @foreach($teachers as $teacher)
            <div class="col-lg-4">
                <div class="contact-box teacher-box">

                    <div>
                        <deletebtn delete_id="{{$teacher->id}}" url="teacher"></deletebtn>
                    </div>
                    <div class="teacher-body">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img alt="image" style="width: 104px;height: 104px" class="img-circle m-t-xs img-responsive" src="{{$teacher->avatar}}">
                                {{--<div class="m-t-xs font-bold">Graphics designer</div>--}}
                            </div>
                        </div>
                        <div class="col-sm-8">

                            <h3><strong>{{$teacher->name}}</strong></h3>
                            <h3><i class="fa fa-briefcas"></i> {{$teacher->job}}</h3>
                            <p>{{$teacher->desrc}}</p>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <div >
                        <a href="/admin/teacher/{{$teacher->id}}" class="btn btn-primary btn-block">查看详情</a>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
    <div class="">  {{$teachers->links()}}</div>
@stop