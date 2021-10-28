@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Faire une location</h3>
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

  <form method="post" action="{{ route('locations.store') }}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="date" name="date" class="form-control" placeholder="Entrer date" />
   </div>
   <div class="form-group">
    <input type="date" name="duree" class="form-control" placeholder="Entrer durée" />
   </div>
   <div class="form-group">
    <input type="text" name="prix" class="form-control" placeholder="Entrer prix" />
   </div>
   <div class="form-group">
    <input type="text" name="detailles" class="form-control" placeholder="Entrer detailles" />
   </div>
   <div class="form-group">
    <input type="text" name="id_client" class="form-control" placeholder="Entrer id_client" />
   </div>
   <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection