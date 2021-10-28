@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Ajouter client</h3>
  
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

  <form method="post" action="{{ route('clients.store') }}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="prenom" class="form-control" placeholder="Entrer prenom" />
   </div>
   <div class="form-group">
    <input type="text" name="nom" class="form-control" placeholder="Entrer nom" />
   </div>
   <div class="form-group">
    <input type="email" name="email" class="form-control" placeholder="Entrer email" />
   </div>
   <div class="form-group">
    <input type="text" name="phone" class="form-control" placeholder="Entrer numéro de téléphone" />
   </div>
   <div class="form-group">
    <input type="text" name="add" class="form-control" placeholder="Entrer votre adresse" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection