@extends('welcome')

@section('content')
    <h1>{{ $article->title }}</h1>
    <hr>

    <p>
        {{ $article->content }}
    </p>

    @unless($article->tags->isEmpty())
        @foreach($article->tags as $tag)
            <a href="#" class="label label-success">{{ $tag->name }}</a>
        @endforeach
    @endunless
@endsection