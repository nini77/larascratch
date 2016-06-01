@extends('layouts.app')

@section('content')
<div class="col-md-6 col-md-offset-3">
	<canvas id= "graph" width="400" height="200"></canvas>
</div>

<script src=https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js></script>
<script type="text/javascript">

	var data = {
		labels: ['Jan','Feb','Mar'],

		datasets:[
			{
        	label: "My First dataset",
          	fillColor:"rgba(220,220,220,0.2)",
        	data:[30,22,80]
			}
		]
	}
	var context =
	document.querySelector('#graph').getContext('2d');

	new Chart(context).Line(data);
</script>
@stop