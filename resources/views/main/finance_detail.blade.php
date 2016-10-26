@extends('main.partials.app')

@section('content')
    {{--bannner--}}
    <section class="activity-detail-banner">
        <img src="/images/activity/01_banner.png" alt="">
    </section>
    {{--choice--}}

    <section class="finance_content" style="">
        <div class="title">{{$finance->title}}</div>
        <div class="subtitle">{{$finance->author}}&nbsp;&nbsp;&nbsp;&nbsp;{{$finance->time}}</div>
    {!! $finance->content !!}
    </section>
@stop