@extends('templates.template')

@section('title')
	{{$title}}
@stop

@section('content')
	<h1>All Cards</h1>
	<table border="1">
	@foreach ($cards as $card)
		<tr>
			<td>{{ $card->title }}</td>
			<td>{{ $card->created_at }}</td>
			<td>{{ $card->updated_at }}</td>
		</tr>
	@endforeach
	</table>
@stop