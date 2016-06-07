@extends('layouts.app')

@section('content')
	<div id = "app" class="col-md-6 col-md-offset-3">
		<h1>Edit the Note</h1>
		<script src ="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>
		@if($success)
			<alert type= "success">
				<strong>Succsess!</strong>Your Note has been updated
			</alert>
			
		@endif
		<br>
		<form method="POST" action="/notes/{{$note->id}}">
			{{method_field('PATCH')}}
			{{ csrf_field() }}
			<div class="form-group">
				<textarea name="body" class="form-control">{{$note->body}}</textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update Note</button>
			</div>
		</form>
		@if(count($errors))
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		@endif
		<template id ="alert-template">
			<div :class="alertClasses" v-show="show">
				<slot></slot>
				<span class="Alert__close" @click="show = false">x </span>
			</div>
		</template>
	<script>
		Vue.component('alert',{
			template: '#alert-template',

			props: ['type'],
			data: function () {
				return {
					show: true
				};
			},
			computed: {
				alertClasses: function(){
					var type = this.type;

					return{
						'Alert' : true,
						'Alert--Sucess' : type == 'success',
						'Alert--Error' : type == 'error'
					}
				}
			}

		});
		new Vue({
			el: '#app'
		
		});
	</script>
	</div>
@stop