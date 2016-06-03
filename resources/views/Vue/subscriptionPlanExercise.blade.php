@extends('layouts.app')

@section('content')
<div class="col-md-6 col-md-offset-3">
	<div id="app">

		<div v-for="plan in plans">
			<plan :plan="plan">
		</div>

		<template id="plan-template">
			<div>
				@{{ $data | json}}
				<span>@{{ plan.name }}</span>
				<span>@{{ plan.price }}/month</span>
				<button @click="setActivePlan">Upgrade</button>
			</div>
		</template>

	</div>
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>

	<script>

		new Vue({
			el: '#app',
			data:{
				plans:[
					{name: 'Enterprise',price: 100},
					{name: 'Pro',price: 50},
					{name: 'Personal',price: 10},
					{name: 'Free',price: 0},
				]
			},
			components:{
				plan: {
					template: '#plan-template',
					props: ['plan'],
					
					methods:{
						setActivePlan: function(){
							this.active = this.plan;
						}
					},
					data: function(){
						return {
							active: false
						};
					}
				}
			}
		});
	</script>
</div>
@stop