@extends('layouts.app')

@section('content')
	<div id="app" class="col-md-6 col-md-offset-3">
		<h1>{{$card->title}}</h1>

		<ul class="list-group">
			@foreach($notes as $note)
				<li class="list-group-item">
				<a href="/cards/{{$note->id}}/edit">{{$note->body}}</a>
			    <a  style="float: right;color: #b7334f;text-decoration: none;" href="/cards/{{$note->id}}/delete">&nbsp;X</a>
			    <div class="pull-right">{{$note->name}}</div>
				</li>	
			@endforeach
		</ul>
		 {!! $notes->links() !!}

		@if(session()->has('flash_message'))
		<script src ="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>
			<alert type= "success">
				<strong>Succsess!</strong>Your Note has been created
			</alert>
				<template id ="alert-template">
			<div :class="alertClasses" v-show="show">
				<slot></slot>
				<span class="Alert__close" @click="show = false">x </span>
			</div>
		</template>
			<script src="/js/main.js"></script>
		@endif

		<h3>Add a new Note</h3>
		<form method="POST" action="/cards/{{$card->id}}/notes">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="user_id" value="1">

			<div class="form-group">
				<textarea name="body" class="form-control">{{old('body')}}</textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Note</button>
			</div>
		</form>
		@if(count($errors))
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		@endif
		

	</div>

@stop