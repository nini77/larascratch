@extends('layout')
@section('content')
<style type="text/css">
html, body {
    height: 100%;
}
body {
    margin: 0;
    padding: 0;
    width: 100%;
    display: table;
    font-weight: 100;
    font-family: 'Lato';
}

.container {
    text-align: center;
    display: table-cell;
    vertical-align: middle;
}

.content {
    text-align: center;
    display: inline-block;
}

.title {
    font-size: 96px;
}
</style>
    <div class="container">
        <div class="content">
            <div class="title">PHPの実務経験は、ほぼほぼ<br>
            ありませんがLaravelで開発をしてみたいです<br>
            面接の機会を何卒<br>よろしくお願い致します  
            </div>
        </div>
     
    </div>
       @if (empty($people))
       		there are no people
       @else
         	some people
       @endif

       	@foreach($people as $person)
        		<li>{{ $person}}</li>
       	@endforeach
@stop
@section('footer')
<!-- 	<script type="text/javascript">
		alert('about page only')
	</script> -->