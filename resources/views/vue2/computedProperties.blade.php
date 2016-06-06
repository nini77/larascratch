@extends('layouts.app')

@section('content')
<div class="col-md-6 col-md-offset-3">
	<div id="app">

		<h1>Skill: @{{skill}}</h1>
		<input type= "text" v-model="points">

		<h1>@{{fullName}}</h1>
		<input type="text" v-model="first" placeholder="First Name">
		<input type="text" v-model="last" placeholder="Last Name">
	</div>
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>

	<script>

		new Vue({
			el: '#app',
			data:{
				points: 50,
				first: 'John',
				last:   'Doe',
				fullName: 'John Doe'	
			},
			computed: {
				skill: function(){
					if(this.points <= 100){
						return 'Beginner';
					}

					return 'Advance';
				}
			},
				watch: {
					first: function(first){
						this.fullName = first + " " + this.last
					},
					last : function(last){
						this.fullName = this.first + " " + this.last
					}

				}
		});
	</script>
</div>
@stop