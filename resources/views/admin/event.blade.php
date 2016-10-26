@extends('layouts.app')

@section('content')
    <div class="ibox-content inspinia-timeline ">
        <div class="row" style="margin: 20px 0">
            <div class=" col-md-2">
                <a href="/admin/event/create" id="create" type="button"
                   class="btn btn-primary ">新增项目</a>
            </div>

        </div>
        <div class="timeline-item ">

            @foreach($events as $event)
                <div class="row a-event-row">
                    <a href="/admin/event/{{$event->id}}" style="color: grey">
                        <div class="col-md-1 ">
                            <img src="{{$event->imgsrc}}" style="width:100%;height: 100%" alt="">
                        </div>
                        <div class="col-md-7 content no-top-border">
                            <div>
                                <deletebtn delete_id="{{$event->id}}" url="event"></deletebtn>
                            </div>
                            <p class="m-b-xs"><strong>{{$event->time}}</strong></p>

                            <p>{{$event->detail}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
                <div class="">  {{$events->links()}}</div>
        </div>
    </div>

@stop