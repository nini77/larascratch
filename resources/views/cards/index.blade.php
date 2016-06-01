@extends('layout')

@section('content')
	<h1>All cards</h1>
	@foreach($cards as $card)
		<!-- <h1>{{$card->title}}</h1> -->
		<div>
		<a href="/cards/{{$card->id}}">{{$card->title}}</a>
		<div>
	@endforeach
@stop