@extends('welcome')

@section('content')
    <h1>Обновить запись</h1>
    <hr>

    @include('partials.errorList')


    {!! Form::model($article, ['method' => 'put','class' => 'form-horizontal', 'route' => ['article.update', 'id' => $article->id]]) !!}
        @include('partials.article_form', ['btnText' => 'Обновить'])
    {!! Form::close() !!}
@endsection