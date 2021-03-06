@extends('layouts.app')

@section('content')
<div class="col-md-6 col-md-offset-3">
	<div id="app">
		<form>
			<span class="error" v-show="!message">
				You must enter a message
			</span>
			<br>
			<textarea v-model="message"></textarea>
			<br>
			<button type="submit" v-show="message">
				Send Message
			</button>
			<pre>
				@{{message | json}}
			</pre>
		</form>
		
	</div>
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.min.js"></script>

	<script>
		new Vue({
			el: '#app',
			data:{
				message: ''
			}
		});
	</script>
</div>
@stop