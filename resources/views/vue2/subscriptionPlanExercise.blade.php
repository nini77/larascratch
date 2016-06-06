@extends('layouts.app')

@section('content')
<div class="col-md-6 col-md-offset-3">
	<div id="app">
	@{{ $data | json}}
		<div v-for="plan in plans">
			<plan :plan="plan" :active.sync="active">
		</div>

		<template id="plan-template">
			<div>
			
				<span>@{{ plan.name }}</span>
				<span>@{{ plan.price }}/month</span>
				<button @click="setActivePlan" v-show="plan.name !== active.name">
					@{{isUpgrade ? 'Upgrade' : 'Downgrade'}}
				</button>
				<span v-else>
				   Current
				</span>
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
				],
				active: {}
			},
			components:{
				plan: {
					template: '#plan-template',
					props: ['plan','active'],
					
					computed:{
						isUpgrade: function(){
							return this.plan.price > this.active.price;
						}
					},
					methods:{
						setActivePlan: function(){
							this.active = this.plan;
						}
					},
				}
			}
		});
	</script>
</div>
@stop