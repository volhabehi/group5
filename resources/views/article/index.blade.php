@extends('welcome')

@section('content')
    <h1>Все статьи</h1>

    @forelse($articles as $article)
    <div class="well well-sm">
        <h2>{{ $article->title }}</h2>
        <p>
            {{ $article->short_description }}
            <a class="pull-right" href="{{ route('article.view', ['article' => $article->id]) }}">далее...</a>
        </p>
    </div>
    @empty
        <p>Статей не обнаружено</p>
    @endforelse

    {!! $articles->render() !!}
@endsection