@extends('welcome')

@section('content')

	<h1>Люди которые мне нравятся</h1>

	<ul>
		@foreach($names as $name)
			<li>
				<a href="{{ route('say-hello', ['name' => $name]) }}">{{ strtoupper($name) }}</a>
			</li>
		@endforeach
	</ul>

@endsection

@section('title', 'Список пользователей')