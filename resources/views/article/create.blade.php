@extends('welcome')

@section('content')
    <h1>Создать запись</h1>
    <hr>

    @include('partials.errorList')


    {!! Form::open(['class' => 'form-horizontal']) !!}
        @include('partials.article_form')
    {!! Form::close() !!}
@endsection