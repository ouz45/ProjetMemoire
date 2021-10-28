@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Infos client</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('clients.create')}}" class="btn btn-primary">Ajouter</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>Prenom</th>
    <th>Nom</th>
    <th>Email</th>
    <th>Téléphone</th>
    <th>Adresse</th>
    <th>Action</th>
   </tr>
   @foreach($clients as $row)
   <tr>
    <td>{{$row['prenom']}}</td>
    <td>{{$row['nom']}}</td>
    <td>{{$row['email']}}</td>
    <td>{{$row['phone']}}</td>
    <td>{{$row['add']}}</td>
    <td><a href="{{action('ClientController@edit', $row['id'])}}" class="btn btn-warning">Editer</a></td>
    <td>
     <form method="post" class="delete_form" action="{{action('ClientController@destroy', $row['id'])}}">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="btn btn-danger">Supprimer</button>
     </form>
    </td>
   </tr>
   @endforeach
  </table>
 </div>
 {{$clients->links()}}
</div>
<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Etes vous sure de vouloir supprimer ce client?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
@endsection