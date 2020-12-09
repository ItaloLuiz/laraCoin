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
         <h1 class="text-center page-header">Moedas</h1>
         <table class="table table-bordered">
            <thead>
               <tr>
                  <th>Code</th>
                  <th>Nome</th>
                  <th>Alta</th>
                  <th>Baixa</th>
                  <th>BID</th>
                  <th>ASK</th>
                  <th>Detalhes</th>
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
                  <td><a href='{{ url('moeda') }}/{{ $moeda->code }} '>Detalhe</a></td>
                  <td>{{ $moeda->created_at }}</td>
               </tr>
               @endforeach
            </tbody>
         </table>
        
      </div>
   </body>
</html>