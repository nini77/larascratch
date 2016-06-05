@extends('layouts.app')

@section('content')
<style>
.completed { text-decoration: line-through; }
</style>
<div class="col-md-6 col-md-offset-3">
	<div id="app">
		<tasks :list="tasks"></tasks>
	
	<template id="task-template">	
		<h1> My Tasks

		 <span v-show="remaining">(@{{ remaining }})</span></h1>
		


		<ul v-show="list.length">
			<li :class="{ completed: task.completed }" 
				V-for="task in list"
				@click="task.completed = ! task.completed"
			>
				@{{task.body}}

				<strong @click="deleteTask(task)">X</strong>

				</li>
		</ul>
		<p v-else>
			No taks yet!
		</p>
		<button @click="clearCompleted">Clear Completed</button>
	</template>
	</div>
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>

	<script>

		Vue.component('tasks',{
			props:['list'],
			template : '#task-template',

			computed:{
				remaining: function(){
					return this.list.filter(this.inProgress).length;
				}

			},
			methods: {
				isCompleted: function(task) {
					return task.completed;
				},

				inProgress: function(task){
					return ! this.isCompleted(task);
				},

				deleteTask: function(task){
					this.list.$remove(task);
				},

				clearCompleted: function(){
					this.list = this.list.filter(this.inProgress);
				}
			}
		});

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