@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('ClientController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="prenom" class="form-control" value="{{$client->prenom}}" placeholder="Entrer prénom" />
   </div>
   <div class="form-group">
    <input type="text" name="nom" class="form-control" value="{{$client->nom}}" placeholder="Entrer nom" />
   </div>
   <div class="form-group">
    <input type="email" name="email" class="form-control" value="{{$client->email}}" placeholder="Entrer email" />
   </div>
   <div class="form-group">
    <input type="text" name="phone" class="form-control" value="{{$client->phone}}" placeholder="Entrer numéro de téléphone" />
   </div>
   <div class="form-group">
    <input type="text" name="add" class="form-control" value="{{$client->phone}}" placeholder="Entrer adresse" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection