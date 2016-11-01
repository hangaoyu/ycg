@extends('layouts.app')

@section('content')
    <div class="row" style="margin: 20px 0">
        <div class=" col-md-2">
            <a href="/admin/area/create" id="create" type="button"
               class="btn btn-primary ">新增项目</a>
        </div>
        {{--<projectsearchbar></projectsearchbar>--}}
    </div>
    <div class="row">
        @foreach($areas as $area)
            <div class="col-lg-4">
                <div class="contact-box area-box">

                    <div>
                        <deletebtn delete_id="{{$area->id}}" url="area"></deletebtn>
                    </div>
                    <div class="area-body">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img alt="image" style="width: 100%" class="img-circle m-t-xs img-responsive" src="{{$area->imgsrc}}">
                                {{--<div class="m-t-xs font-bold">Graphics designer</div>--}}
                            </div>
                        </div>
                        <div class="col-sm-8">

                            <h3><strong>{{$area->name}}</strong></h3>
                            <h3><i class="fa fa-map-marker"></i> {{$area->address}}</h3>

                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <div >
                        <a href="/admin/area/{{$area->id}}" class="btn btn-primary btn-block">查看详情</a>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
    <div class="">  {{$areas->links()}}</div>
@stop