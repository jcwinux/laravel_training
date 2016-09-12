@extends('templates.template')

@section('title')
	{{$title}}
@stop

@section('content')
	<h1>One Card</h1>
	<table border="1">
		<tr>
			<td>{{ $card->title }}</td>
			<td>{{ $card->created_at }}</td>
			<td>{{ $card->updated_at }}</td>
		</tr>
	</table>
@stop