@extends('layouts.app')

@section('content')



    <div class="col-md-3 col-md-offset-2">
        <div class="ibox float-e-margins">
            <div>
                <div class="ibox-content no-padding border-left-right text-center">
                    <div id="validation-errors"></div>
                    <img alt="image" class="img-responsive project-image" id="activity-avatar"
                         src="{{$item->img_src}}">
                    <div class="ibox-content logo-content">
                        {!! Form::open(['url'=>'/admin/activity/avatar','files'=>true,'id'=>'avatar']) !!}
                        {!! Form::hidden('id',$item->id)!!}
                        {!! Form::hidden('type','small')!!}
                        <div class="text-center">
                            <button type="button" class="btn btn-primary avatar-button" id="upload-logo">
                                上传简介图片
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
    <div class="col-md-3 col-md-offset-2">
        <div class="ibox float-e-margins">
            <div>
                <div class="ibox-content no-padding border-left-right text-center">
                    <div id="validation-errors"></div>
                    <img alt="image" class="img-responsive project-image" id="activity-big-avatar"
                         src="{{$item->big_img_src}}">
                    <div class="ibox-content logo-content">
                        {!! Form::open(['url'=>'/admin/activity/avatar','files'=>true,'id'=>'big-avatar']) !!}
                        {!! Form::hidden('id',$item->id)!!}
                        {!! Form::hidden('type','big')!!}
                        <div class="text-center">
                            <button type="button" class="btn btn-primary avatar-button" id="big-upload-logo">
                                上传大图
                            </button>
                        </div>
                        {!! Form::file('avatar',['class'=>'logo','id'=>'big_img']) !!}
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
        {!! Form::model([$item],['method'=>'PATCH','url'=>'admin/activity/'.$item->id])!!}
        <div class="form-group">
            {!! Form::label('time','时间:') !!}
            {!! Form::text('time',null,['class'=>'form-control','id'=>'mydatepicker2','placeholder'=>$item->time]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title','标题:') !!}
            {!! Form::text('title',$item->title,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('address','活动地址:') !!}
            {!! Form::text('address',$item->address,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('desrc','描述:') !!}
            {!! Form::textarea('desrc', $item->desrc, ['class' => 'form-control',]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('contact','联系方式:') !!}
            {!! Form::textarea('contact', $item->contact, ['class' => 'form-control',]) !!}
        </div>
        <div class="form-group">
            <div class="editor">
                {!! Form::label('process','活动流程:') !!}
                {!! Form::textarea('process', $item->process, ['class' => 'form-control','id'=>'myEditor']) !!}
            </div>
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

            $('#big_img').on('change', function () {
                $('#big-upload-logo').html('正在上传...');
                $('#big-avatar').ajaxForm(options).submit();
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
                console.log(response.type);
                if(response.type == 'small'){
                    $('#activity-avatar').attr('src', response.avatar);
                    $('#upload-logo').html('更换新的活动图片');
                }
                else {
                    $('#activity-big-avatar').attr('src', response.avatar);
                    $('#big-upload-logo').html('更换新的活动图片');
                }


            }
        }
    </script>


@stop