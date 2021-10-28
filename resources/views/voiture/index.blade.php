@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Infos Voitures</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('voitures.create')}}" class="btn btn-primary">Ajouter</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>id</th>
    <th>Matricule</th>
    <th>Marque</th>
    <th>Action</th>
   </tr>
   @foreach($voitures as $row)
   <tr>
    <td>{{$row['id']}}</td>
    <td>{{$row['Matricule']}}</td>
    <td>{{$row['Marque']}}</td>
    <td><a href="{{action('VoitureController@edit', $row['id'])}}" class="btn btn-warning">Editer</a></td>
    <td>
     <form method="post" class="delete_form" action="{{action('VoitureController@destroy', $row['id'])}}">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="btn btn-danger">Supprimer</button>
     </form>
    </td>
   </tr>
   @endforeach
  </table>
 </div>
 {{$voitures->links()}}
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