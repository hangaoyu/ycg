@extends('layouts.app')

@section('content')
    @include('editor::head')

    {!! Form::open(['url'=>'/discussions'])!!}
    {{--Title--}}
    <div class="">
        {!! Form::label('title','Title:') !!}
        <div class="row">
            {!! Form::text('title',null,['class'=>'','id'=>'mydatepicker2']) !!}
        </div>

    </div>
    {{--Body--}}
    {{--<div class="form-group">--}}
        {{--<div class="editor">--}}
            {{--{!! Form::textarea('body', null, ['class' => 'form-control','id'=>'myEditor']) !!}--}}
        {{--</div>--}}
    {{--</div>--}}


    {!! Form::submit('发表帖子',['class'=>'btn btn-success  pull-right']) !!}
    {!! Form::close() !!}

@stop