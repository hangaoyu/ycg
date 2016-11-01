@extends('layouts.app')

@section('content')
    <div class="wrapper wrapper-content  ">
        <div class="row">
            <div class="row  ">
                {{--头像--}}
                <div class="col-md-3 ">
                    <div class="ibox float-e-margins">
                        <div>
                            <div class="ibox-content no-padding border-left-right text-center">
                                <div id="validation-errors"></div>
                                <img alt="image"  class="img-responsive project-image" id="teacher-avatar"
                                     src="{{$event->imgsrc}}">
                                <div class="ibox-content logo-content">
                                    {!! Form::open(['url'=>'/admin/event/avatar','files'=>true,'id'=>'avatar']) !!}
                                    {!! Form::hidden('id',$event->id)!!}
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary avatar-button" id="upload-logo">
                                            上传新的头像
                                        </button>
                                    </div>
                                    {!! Form::file('avatar',['class'=>'logo','id'=>'image']) !!}
                                    {!! Form::close() !!}
                                    <div class="span5">
                                        <div id="output" style="display:none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--文字--}}
                <div class="row col-md-7 col-md-offset-1">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> 检查是否填写完整.<br>
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
                    {!! Form::model([$event],['method'=>'PATCH','url'=>'admin/event/'.$event->id])!!}
                    <div class="form-group">
                        {!! Form::label('name','日期:') !!}
{{--                        {!! Form::text('time',$event->time,['class'=>'form-control','id'=>'mydatepicker2']) !!}--}}

                            {!! Form::text('time',null,['class'=>'','id'=>'mydatepicker2','placeholder'=>$event->time]) !!}


                    </div>
                    <div class="form-group">
                        {!! Form::label('detail','描述:') !!}
                        {!! Form::textarea('detail',$event->detail,['class'=>'form-control']) !!}
                    </div>
                    {!! Form::submit('确认修改',['class'=>'btn btn-success  pull-right']) !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function () {
            var options = {
                beforeSubmit: showRequest,
                success: showResponse,
                dataType: 'json'
            };
            $('#image').on('change', function () {
                $('#upload-logo').html('正在上传...');
                $('#avatar').ajaxForm(options).submit();
            });
        });
        function showRequest() {
            $("#validation-errors").hide().empty();
            $("#output").css('display', 'none');
            return true;
        }

        function showResponse(response) {
            if (response.success == false) {
                var responseErrors = response.errors;
                $.each(responseErrors, function (index, value) {
                    if (value.length != 0) {
                        $("#validation-errors").append('<div class="alert alert-error"><strong>' + value + '</strong><div>');
                    }
                });
                $("#validation-errors").show();
            } else {
                $('#teacher-avatar').attr('src', response.avatar);
                $('#upload-logo').html('更换新的头像');
            }
        }
    </script>


@stop