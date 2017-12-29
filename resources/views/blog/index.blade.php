@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">Fórum da DPU</p>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title"><a href="{{ route('blog.post', ['id' => $post->id]) }}">{{ $post->title }}</a></h1>
            <p>{{ $post->content }}</p>
        </div>
    </div>
    <hr>
    @endforeach
@endsection