@extends('layouts.app')

@section('content')
<div class="col-md-6 col-md-offset-3">
	<div id="app">
		<tasks></tasks>
		<template id="task-template">
			<h1>My Tasks</h1>
			<ul class="list-group">
				<li class = "list-group-item" v-for="task in list">
					@{{ task.body}}

					<strong @click="delete(task)">X</strong>
				</li>
			</ul>			
		</template>


	</div>
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>
<script   src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>

	<script>
	Vue.component('tasks',{
		template: '#task-template',

		data: function() {
			return {
				list: []
			};
		},
		created: function() {
			$.getJSON('api/tasks',function(tasks){
				this.list = tasks;
			}.bind(this));
		},
		methods: {
			delete: function(task){
				this.list.$remove(task);
			}
		}

	});

	new Vue({
		el: '#app'

	});
	</script>
</div>
@stop