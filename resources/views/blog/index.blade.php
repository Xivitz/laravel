@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <div class="col-md-12">
                    <img class="img-responsive" src="/img/logo-forum.png" alt="">
                </div>
                    <p class="alert-success">PUBLICAÇÃO DA ESCOLA SUPERIOR DA DEFENSORIA PÚBLICA DA UNIÃO V.3, Nº 9, 2017</p>
            </div>
        </div>
    </div>

    <aside class="navbar-brand navbar-left col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <p>Editorial</p>
            </div>
            <div class="panel-body">
                <p>Por Fernando Mauro Barbosa de Oliveira Junior</p>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">
                <p>A atuação da DPU em itinerantes indígenas</p>
            </div>
            <div class="panel-body">
                <p>Por Eduardo Marcelo de Negueiros Freitas</p>
            </div>
        </div>
    </aside>


    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title"><a href="{{ route('blog.post', ['id' => $post->id]) }}">{{ $post->title }}</a></h1>
            <p style="font-weight: bold">
                @foreach($post->tags as $tag)
                    - {{ $tag->name }} - </br>
                @endforeach
            </p>
            <!-- <p>{{ $post->content }}</p> -->
        </div>
    </div>
    <hr>
    @endforeach
    <div class="row">
        <div class="col-md-12 text-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
