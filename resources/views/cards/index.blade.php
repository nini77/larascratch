@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<h1>All cards</h1>
		@foreach($cards as $card)
			<!-- <h1>{{$card->title}}</h1> -->
			<div>
			<a href="/cards/{{$card->id}}">{{$card->title}}</a>
			<div>
	
		@endforeach
	</div>
@stop