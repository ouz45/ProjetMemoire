@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Editer enregistrement</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('VoitureController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="matricule" class="form-control" value="{{$voiture->matricule}}" placeholder="Entrer matricule" />
   </div>
   <div class="form-group">
    <input type="text" name="marque" class="form-control" value="{{$voiture->marque}}" placeholder="Entrer marque" />
   </div>
   <div class="form-group">
    <input type="text" name="modele" class="form-control" value="{{$voiture->modele}}" placeholder="Entrer modele" />
   </div>
    <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Editer" />
   </div>
  </form>
 </div>
</div>

@endsection