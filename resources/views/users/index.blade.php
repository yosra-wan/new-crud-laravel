  @extends('users.crudLayout')
  @section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">users</h1> 
    
    <div class="col-sm-12">
      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div>
      @endif
    </div>

    <div>
      <a style="margin: 19px;" href="{{ route('users.create')}}" class="btn btn-primary">Nouveau user </a>
      </div>


  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Last Name </td>
          <td>Email</td>
         
          <td colspan = 2>Actions</td>
        </tr>
        
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->first_name}}</td>
            <td> {{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            
            <td>
                <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
          
              <a class="btn btn-warning" href="{{ route('photos' ,$user->id)}}">galerie</a>
            </td>
            <td>
              
                <form action="{{ route('users.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection