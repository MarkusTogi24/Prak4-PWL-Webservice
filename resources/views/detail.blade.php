@extends('master')

@section('content')
    <div class="m-4">
        <h4>Detail Post</h4>
    </div>
    <div>
        <h4>{{ $post->title }}</h4>
        <h6>by. {{ $post->author }}</h6>
        <h5>{{ $post->body }}</h5>
    </div>
    <div>
        @foreach ($comments as $comment)
            <h6> {{ $comment->content }} </h6>
        @endforeach
    </div>

@endsection
