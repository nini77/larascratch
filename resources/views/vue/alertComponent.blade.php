@extends('layouts.app')

@section('content')

<style type="text/css">
	.Alert{
		position: relative;
		background: #ddd;
		border: 1px solid darken(#ddd,10%);
		padding: 1em;
	}
	.Alert--Sucess{
		background: #7bec7b;
	}
	.Alert--Error{
		background: #ef6a6a;
	}

	.Alert__close{
		position: absolute;
		top: 1em;
		right: 1em;
		font-weight: bold;
		cursor: pointer;
	}
</style>
<div class="col-md-6 col-md-offset-3">
	<div id="app">
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>

		<alert >
			<strong>Generall!</strong>Your account has been updated
		</alert>
		<alert type= "success">
			<strong>Succsess!</strong>Your account has been updated
		</alert>
		<alert type= "error">
			<strong>Error!</strong>Your account has  not been updated
		</alert>

		<template id ="alert-template">
			<div :class="alertClasses" v-show="show">
				<slot></slot>
				<span class="Alert__close" @click="show = false">x </span>
			</div>
		</template>
	</div>

	<script>
		Vue.component('alert',{
			template: '#alert-template',

			props: ['type'],
			data: function () {
				return {
					show: true
				};
			},
			computed: {
				alertClasses: function(){
					var type = this.type;

					return{
						'Alert' : true,
						'Alert--Sucess' : type == 'success',
						'Alert--Error' : type == 'error'
					}
				}
			}

		});
		new Vue({
			el: '#app'
		
		});
	</script>
</div>
@stop