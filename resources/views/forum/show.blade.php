@extends('app')
@section('content')

    <div class="jumbotron">
        <div class="container">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object img-circle" alt="64x64" src="{{ $discussion->user->avatar }}" style="width: 64px;">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"> <a href="/discussions/{{$discussion->id}}"> {{ $discussion->title }} </a>
                    <a class="btn btn-primary btn-lg pull-right" href="/discussions/{{ $discussion->id }}/edit" role="button">修改帖子</a>
                    </h4>
                    {{ $discussion->user->name }}

                </div>
            </div>
        </div>
    </div>

    <!-- blog主体 -->

        <div class="container">
            <div class="row">
                <div class="col-md-9" role="main">
                    <div class="blog-post">
                        {!! $html !!}
                    </div>
                    <hr>
                    @foreach($discussion->comments as $comment)
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object img-circle" alt="64x64" src="{{ $comment->user->avatar }}" style="width: 64px;">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{ $comment->user->name  }}</h4>
                                {{ $comment->body }}
                            </div>
                        </div>
                    @endforeach
                    <hr>
                    @if(Auth::check())
                        {!! Form::open(['url'=>'/comment']) !!}
                            {!! Form::hidden('discussion_id',$discussion->id) !!}
                        <div class="form-group">
                            {!! Form::textarea('body',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('发表评论',['class'=>'btn btn-primary pull-right']) !!}
                        </div>

                        {!! Form::close() !!}
                    @else
                        <a href="/user/login" class="btn btn-block ">登陆参与讨论</a>
                    @endif
                </div>

            </div>

        </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">

            </div>
        </div>
    </div>
@stop