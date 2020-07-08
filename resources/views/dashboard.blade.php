@extends('template')
@section('scripts')
  

       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Hora', 'Media Vendas'],
          @foreach ($Vendas_hora as $v)
          [{{ $v->hora }}, {{ $v->media }}],
          @endforeach
         
        ]);

        var options = {
          title: 'Media de vendas por hora',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }

</script>
@endsection
@section('conteudo')
	<div class="row">
		<div class="col-md-6" id="curve_chart">
			
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
  

@endsection 
