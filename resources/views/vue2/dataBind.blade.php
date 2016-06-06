@extends('layouts.app')

@section('content')
<div class="col-md-6 col-md-offset-3">
	<div id="app">
		<h1>@{{message }}</h1>

		<input v-model="message">
	
		<pre>
			@{{ $data | json }}
		</pre>
	</div>
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.min.js"></script>

	<script>
		new Vue({
			el: '#app',
			data:{
				message: 'Hello world'
			}
		});



	</script>
@stop