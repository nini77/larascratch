@extends('layouts.app')

@section('content')
<div class="col-md-6 col-md-offset-3">
	<div id="app">

	<mycounter subject="Likes"></mycounter>
	<mycounter subject="DisLikes"></mycounter>
	
	<template id="counter-template">
		<h1>@{{subject}}</h1>
		<button @click="count += 1">@{{count}}</button>
	</template>



	</div>
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>

	<script>
		Vue.component('mycounter',{
			template: '#counter-template',
			props: ['subject'],
			data: function(){
				return {count: 0};
			}
		});

		new Vue({
			el: '#app',
			// component: {
			// 	mycounter:{
			// 		template: '#counter-template',
			// 		props: ['subject'],
			// 		data: function(){
			// 			return {count: 0};
			// 		}
			// 	}
			// }
		});
	</script>
</div>
@stop