@extends('welcome')

@section('content')
    <h1>Создать запись</h1>
    <hr>

    @include('partials.errorList')




    <form method="post" action="{{ route('article.store') }}">
        {{ csrf_field() }}
        <input type="text" name="title" value="{{ old('title') }}"><br>
        <input type="text" name="short_description" value="{{ old('short_description') }}"><br>
        <textarea name="content">{{ old('content') }}</textarea>
        <input type="submit">
    </form>
@endsection