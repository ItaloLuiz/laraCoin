<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Moedas</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <!-- Styles -->
      <style>
         *{font-family: 'Raleway', sans-serif;}
         .table{
         margin-top:45px;
         font-weight:bold
         }
      </style>
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="text-center page-header">Moeda {{ $code}} </h1>
               <a class="btn btn-primary" href="{{ url('/') }}">Voltar</a>  
               <table class="table table-bordered">
                  <thead>
                     <tr>
                        <th>Code</th>
                        <th>Nome</th>
                        <th>Alta</th>
                        <th>Baixa</th>
                        <th>BID</th>
                        <th>ASK</th>
                        <th>Data</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($moedas as $moeda)
                     <tr>
                        <td>{{ $moeda->code }}</td>
                        <td>{{ $moeda->name }}</td>
                        <td>{{ $moeda->high }}</td>
                        <td>{{ $moeda->low }}</td>
                        <td>{{ $moeda->bid }}</td>
                        <td>{{ $moeda->ask }}</td>
                        <td>{{ $moeda->created_at }}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="table-responsive">
                  <canvas id="myChart" width="1200" height="350"></canvas>
               </div>
            </div>
         </div>
      </div>
      <!--Load the AJAX API-->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
      <script type="text/javascript">
         var ctx = document.getElementById('myChart');
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
             labels: [<?php echo substr($data,10);?>,
             datasets: [{
                 label: '# Valor',
                 data: [<?php echo substr($alta,10);?>,
                 backgroundColor: [
                     'rgba(255, 99, 132, 0.2)',
                     'rgba(54, 162, 235, 0.2)',
                     'rgba(255, 206, 86, 0.2)',
                     'rgba(75, 192, 192, 0.2)',
                     'rgba(153, 102, 255, 0.2)',
                     'rgba(255, 159, 64, 0.2)'
                 ],
                 borderColor: [
                     'rgba(255, 99, 132, 1)',
                     'rgba(54, 162, 235, 1)',
                     'rgba(255, 206, 86, 1)',
                     'rgba(75, 192, 192, 1)',
                     'rgba(153, 102, 255, 1)',
                     'rgba(255, 159, 64, 1)'
                 ],
                 borderWidth: 1
             }]
         },
         options: {
             scales: {
                 yAxes: [{
                     ticks: {
                         beginAtZero: true
                     }
                 }]
             }
         }
         });
         
      </script>
   </body>
</html>