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
                {!! Form::model([$investor],['method'=>'PATCH','url'=>'admin/investor/'.$investor->id])!!}

                <div class="form-group">
                    {!! Form::label('h_title','医创论坛:') !!}
                    {!! Form::textarea('h_title',$investor->h_title,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('i_title','投资训练营:') !!}
                    {!! Form::textarea('i_title',$investor->i_title,['class'=>'form-control']) !!}
                </div>
                    <div class="form-group">
                        {!! Form::label('b_title','商务合作:') !!}
                        {!! Form::textarea('b_title',$investor->b_title,['class'=>'form-control']) !!}
                    </div>
                {!! Form::submit('确认修改',['class'=>'btn btn-success  pull-right']) !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>








@stop