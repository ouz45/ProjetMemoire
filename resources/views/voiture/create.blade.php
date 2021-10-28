@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Ajouter une voiture</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{ route('voitures.store') }}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="matricule" class="form-control" placeholder="Entrer matricule" />
   </div>
   <div class="form-group">
    <input type="text" name="marque" class="form-control" placeholder="Entrer marque" />
   </div>
   <div class="form-group">
    <input type="text" name="modele" class="form-control" placeholder="Entrer modele" />
   </div>
   <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection