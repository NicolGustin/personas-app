<!doctype html>
<html lang="en">
    
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> listado de Comunas</title>
</head>

<body>
    <div class="container">
       <h1>listado de Comunas</h1>
       {{-- <a href="{{ router('comunas.create') }}" class="btn btn-success">Add</a> --}}
       <table class="table">
             <thead>
               <tr>
                <th scope="col">Code</th>
                <th scope="col">Comunas</th>
                <th scope="col">Municipio</th>
                <th scope="col">Acciones</th>
               </tr>
        </thead>
        <tbody>
           @foreach ($comunas as $comuna)
                <tr>
                    <th scope="row">{{ $comuna->comu_codi }}</th>
                    <td>{{ $comuna->comu_nomb }}</td>
                    <td>{{ $comuna->muni_nomb }}</td>
                    <td><span>Acciones</span></td>
                </tr>
            @endforeach
       </tbody>
    </table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
       integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    
  </body>
</html>
