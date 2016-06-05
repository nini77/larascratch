@extends('layouts.app')

@section('content')
<style>
.completed { text-decoration: line-through; }
</style>
<div class="col-md-6 col-md-offset-3">
	<div id="app">

	<ul>
		<li :class="{ completed: task.completed }" 
			V-for="task in tasks"
			@click="task.completed = ! task.completed"
		>
			@{{task.body}}</li>
	</ul>
	
	</div>
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>

	<script>

		new Vue({
			el: '#app',
			data:{
				tasks:[
					{body:'Go to the store',completed: false},
					{body:'Go to the bank',completed: false},
					{body:'Go to the doctor',completed: true},
				]

			}
		});
	</script>
</div>
@stop