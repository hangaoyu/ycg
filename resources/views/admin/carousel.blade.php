@extends('layouts.app')

@section('content')

    <section >
        <div class="col-md-12">
            <div class="col-md-3  upload_img">
                {{--<div class="col-md-2">--}}

                {!! Form::open(['url'=>'/admin/post/upload_img','files'=>true])!!}
                <div class="col-md-12 form-group">
                    <div class="col-md-6">
                        {!! Form::label('type_list','Type_list:') !!}
                    </div>
                    <div class="col-md-6">
                        {{ Form::select('type_id', $types, null,['class'=>'form-control  js-example-basic-single']) }}
                    </div>
                </div>
                <div class="form-group">
                    <button type="button" class="cover-btn col-md-12 btn btn-primary">
                        选择图片
                    </button>
                </div>
                <div class="form-group">
                    {!! Form::file('img',['class'=>'sub_img btn btn-primary','id'=>'image','onchange'=>"eventStart()"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('上传',['class'=>'btn btn-success form-control']) !!}
                </div>
                {!! Form::close() !!}
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!!</strong> 检查是否填写完整.<br>
                        <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @elseif(!empty(session('success')))
                    <div class="alert alert-success">
                        <strong>Whoops!</strong> {{session('success')}}.<br>
                        <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-12" style="background-color: #ecf0f5">
            @if(!empty(session('type_id')))

                <carousel type_id="{{session('type_id')}}"></carousel>
            @else
                <carousel type_id=1 ></carousel>
            @endif
        </div>
    </section>
    <script type="text/javascript">
        function getFileName(o) {
            var pos = o.lastIndexOf("\\");
            return o.substring(pos + 1);
        }
        function eventStart() {
            var f_name = $('#image').val();
            var fileName = getFileName(f_name);
            console.log(fileName);
            $('.cover-btn').html(fileName);
        }

        $(document).ready(function () {
            $(".js-example-basic-single").select2();
        });
    </script>

@stop