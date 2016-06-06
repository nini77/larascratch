@extends('layouts.app')

@section('content')
<div class="col-md-6 col-md-offset-3">
	<canvas id="radar" height="600" width="600"></canvas>
</div>

<script src=https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js></script>
<script type="text/javascript">

var radarChartData = {
  labels : ["Laravel","Vue.js","SQL","hlml","css","English","Communication","Infra"],
  datasets : [
   
    {
      fillColor : "rgba(151,187,205,0.5)",
      strokeColor : "rgba(151,187,205,1)",
      pointColor : "rgba(151,187,205,1)",
      pointStrokeColor : "#fff",
      data : [50,50,80,50,50,60,85,45]
    }
  ]  
}
var myRadar = new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData,{scaleShowLabels : false, pointLabelFontSize : 10});
</script>
@stop