@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Infos Locations</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('locations.create')}}" class="btn btn-primary">Ajouter</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>id</th>
    <th>Date</th>
    <th>Duree</th>
    <th>Prix</th>
    <th>Détailles</th>
    <th>ID_Client</th>
    <th>Action</th>
   </tr>
   @foreach($locations as $row)
   <tr>
    <td>{{$row['id']}}</td>
    <td>{{$row['date']}}</td>
    <td>{{$row['duree']}}</td>
    <td>{{$row['prix']}}</td>
    <td>{{$row['detailles']}}</td>
    <td>{{$row['id_client']}}</td>
    <td><a href="{{action('LocationController@edit', $row['id'])}}" class="btn btn-warning">Editer</a></td>
    <td>
     <form method="post" class="delete_form" action="{{action('LocationController@destroy', $row['id'])}}">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="btn btn-danger">Supprimer</button>
     </form>
    </td>
   </tr>
   @endforeach
  </table>
 </div>
 {{$locations->links()}}
</div>
<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Etes vous sure de vouloir supprimer cette voiture?"))
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