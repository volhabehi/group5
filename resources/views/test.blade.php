<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
	<h1>Люди которые мне нравятся</h1>

	<ul>
		@foreach($names as $name)
			<li>
				<a href="{{ route('say-hello', ['name' => $name]) }}">{{ strtoupper($name) }}</a>
			</li>
		@endforeach
	</ul>
</body>
</html>