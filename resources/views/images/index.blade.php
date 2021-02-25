
@extends('images.layout')
@section('content_img')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Images </h2>
            </div>
            
        </div>
    </div>
   
    <div class="row">
       

      <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Path</th>
            
        </tr>
        @foreach ($images as $image)
        <tr>
            <td>{{ $image->id }}</td>
            <td>{{ $image->name }}</td>
            <td>{{ $image->path }}</td>
            
            
          
        </tr>
        @endforeach
    </table>
@endsection
