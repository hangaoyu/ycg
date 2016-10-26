@extends('layouts.app')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="row col-md-7 col-md-offset-2">
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
                {!! Form::model([$about],['method'=>'PATCH','url'=>'admin/about/'.$about->id])!!}
                    <div class="form-group">
                        {!! Form::label('address','位置:') !!}
                       {!! Form::text('address',$about->address,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone','电话:') !!}
                        {!! Form::text('phone',$about->phone,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email','e-mail:') !!}
                        {!! Form::text('email',$about->email,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('postcode','邮编:') !!}
                        {!! Form::text('postcode',$about->postcode,['class'=>'form-control']) !!}
                    </div>
                <div class="form-group">
                    {!! Form::label('production','云创谷简介:') !!}
                    {!! Form::textarea('production',$about->production,['class'=>'form-control']) !!}
                </div>
                    <div class="form-group">
                        {!! Form::label('healthy','关于大健康:') !!}
                        {!! Form::textarea('healthy',$about->healthy,['class'=>'form-control']) !!}
                    </div>
                {!! Form::submit('确认修改',['class'=>'btn btn-success  pull-right']) !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>








@stop