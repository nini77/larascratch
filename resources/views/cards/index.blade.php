@extends('layouts.app')
<script src ="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>

@section('content')
	<div id="app" class="col-md-6 col-md-offset-3">
		<h1>All cards</h1>
		@foreach($cards as $card)
			<!-- <h1>{{$card->title}}</h1> -->
			<div>
			<a href="/cards/{{$card->id}}">{{$card->title}}</a>
			<div>
	
		@endforeach
  		{!! $cards->links() !!}

		<h3>Add a new Card</h3>
		@if($success)
			<alert type= "success">
				<strong>Succsess!</strong>Your Card has been created
			</alert>
		@endif
		<form method="POST" action="/cards">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<!-- <input type="hidden" name="user_id" value="1"> -->

			<div class="form-group">
				<textarea name="title" class="form-control">{{old('title')}}</textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Card</button>
			</div>
		</form>

		@if(count($errors))
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		@endif
        <template id ="alert-template">
			<div :class="alertClasses" v-show="show">
				<slot></slot>
				<span class="Alert__close" @click="show = false">x </span>
			</div>
		</template>
		<script src="/js/main.js"></script>

	</div>
@stop