@extends('app')
@section('content')
    @if(Auth::check())
        <h1>功能尚未开通.....</h1>


    @else
        <a href="/user/login" class="btn btn-block " style="margin-top: 5cm;">请先登录</a>


    @endif

@stop