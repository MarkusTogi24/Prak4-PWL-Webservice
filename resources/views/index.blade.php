@extends('master')

@section('content')
    <div class="m-4">
        <h4>Semua post</h4>
    </div>
    @foreach ($posts as $post)
        <div>
            <a href="detail/{{ $post->id }}">{{ $loop->index+1 }}. {{ $post->title }}</a>
        </div>
    @endforeach
@endsection
