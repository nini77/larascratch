@extends('layouts.app')

@section('content')

<div class="col-md-6 col-md-offset-3">
	<div id="app">
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>

		<h1>@{{ 'hello world' | uppercase }}</h1>
		<h1>@{{ '5' | currency }}</h1>
		<pre>@{{$data | json}}</pre>

		<ul>
			<li v-for="person in people | role 'admin' ">@{{person.name}}</li>
		</ul>
	</div>

	<script>

		Vue.filter('role',function(value, role){
			return value.filter(function(item){
				return item.role == role;
			});
		});
		new Vue({
			el: '#app',


			data: {
				people:[
					{name : 'Joe',role : 'admin'},
					{name : 'Susan',role : 'admin'},
					{name : 'Frank',role : 'student'},
					{name : 'Jeffrey',role : 'admin'},
				]
			}

		});
	</script>
</div>
@stop