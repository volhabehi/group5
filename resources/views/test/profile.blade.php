@extends('welcome')

@section('content')

	<h1>Привет {{ $name }}</h1>

@endsection

@section('title', "пользователь $name")