@extends('app')
@section('content')

    <div class="jumbotron">
        <div class="container">
            <h2>找到你的灵魂伴侣
            </h2>
            <h6><a class="btn btn-primary btn-lg pull-right" href="/discussions/create" role="button">发布新的帖子</a></h6>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
            @foreach($discussions as $discussion)
                <div class="media">
                <div class="media-left">
                <a href="#">
                    <img class="media-object img-circle" alt="64x64" src="{{ $discussion->user->avatar }}" style="width: 64px;">
                </a>
                </div>
                <div class="media-body">
                <h4 class="media-heading">
                    <a href="/discussions/{{ $discussion->id }}">{{ $discussion->title  }}</a>
                    <div class="media-conversation-meta">
                    <span class="media-conversation-meta pull-right">
                        {{ count($discussion->comments) }}
                        回复
                    </span>
                    </div>
                </h4>
                {{ $discussion->user->name }}
                </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@stop