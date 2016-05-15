@extends('welcome')

@section('content')
<table class="table table-bordered">
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>District</th>
		<th>Population</th>
		{{-- <th>CountryName</th> --}}
	</tr>
	@foreach($cities as $n => $citie)
		<tr>
			<td>{{ $n + 1 }}</td>
			<td>{{ $citie->Name }}</td>
			<td>{{ $citie->District }}</td>
			<td>{{ $citie->Population }}</td>
			{{-- <td>{{ $citie->n }}</td> --}}
		</tr>
	@endforeach
</table>
{{ $cities->render() }}
@stop