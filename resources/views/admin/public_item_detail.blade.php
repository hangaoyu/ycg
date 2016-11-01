@extends('layouts.app')

@section('content')
    <div class="col-md-3 col-md-offset-4">
        <div class="ibox float-e-margins">
            <div>
                <div class="ibox-content no-padding border-left-right text-center">
                    <div id="validation-errors"></div>
                    <img alt="image" class="img-responsive project-image" id="publicwelfare-avatar"
                         src="{{$item->img_src}}">
                    <div class="ibox-content logo-content">
                        {!! Form::open(['url'=>'/admin/publicwelfare/avatar','files'=>true,'id'=>'avatar']) !!}
                        {!! Form::hidden('id',$item->id)!!}
                        <div class="text-center">
                            <button type="button" class="btn btn-primary avatar-button" id="upload-logo">
                                上传活动图片
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
    <div class="row col-md-10 col-md-offset-1">
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
        @include('editor::head')
        {!! Form::model([$item],['method'=>'PATCH','url'=>'admin/publicwelfare/'.$item->id])!!}
        <div class="form-group">
            {!! Form::label('time','时间:') !!}
            {!! Form::text('time',null,['class'=>'form-control','id'=>'mydatepicker2','placeholder'=>$item->time]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title','标题:') !!}
            {!! Form::text('title',$item->title,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('at_where','活动地址:') !!}
            {!! Form::text('at_where',$item->at_where,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('qq','qq:') !!}
            {!! Form::text('qq',$item->qq,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('wx','wx:') !!}
            {!! Form::text('wx',$item->wx,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('sina','sina:') !!}
            {!! Form::text('sina',$item->sina,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            <div class="editor">
                {!! Form::textarea('desrc', $item->desrc, ['class' => 'form-control','id'=>'myEditor']) !!}
            </div>
        </div>
        <div class="form-group">

            {!! Form::textarea('address', $item->address, ['class' => 'form-control',]) !!}

        </div>

        {!! Form::submit('确认修改',['class'=>'btn btn-success  pull-right']) !!}
        {!! Form::close() !!}

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
            console.log(response);
            if (response.success == false) {

                var responseErrors = response.errors;
                $.each(responseErrors, function (index, value) {
                    if (value.length != 0) {
                        $("#validation-errors").append('<div class="alert alert-error"><strong>' + value + '</strong><div>');
                    }
                });
                $("#validation-errors").show();
            } else {
                console.log(response);
                $('#publicwelfare-avatar').attr('src', response.avatar);
                $('#upload-logo').html('更换新的活动图片');
            }
        }
    </script>



@stop