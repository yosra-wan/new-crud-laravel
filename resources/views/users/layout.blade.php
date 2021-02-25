<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galerie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="jumbotron text-center">
  <h1>Galerie Image </h1>
</div>
  
<div class="container">
    @yield('content')
    <!-- same as show !-->

    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center text-danger my-5">
                <h2> Images </h2>
            </div>
            
        </div>
    </div> --}}
   <!--
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
            </div>
        </div>
    </div>
-->
      {{-- <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>path</th>
            
        </tr>
        @foreach ($imagees as $imagee)
        <tr>
            <td>{{ $imagee->id }}</td>
            <td>{{ $imagee->name }}</td>
            <td>{{ $imagee->path }}</td>
            
            
          
        </tr>
        @endforeach
    </table> --}}

</div>

<script src="{{ asset('js/app.js') }}" type="text/js"></script>    
</body>
</html>