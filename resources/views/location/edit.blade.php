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
  <form method="post" action="{{action('LocationController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="date" name="date" class="form-control" value="{{$location->date}}" placeholder="Entrer date" />
   </div>
   <div class="form-group">
    <input type="text" name="duree" class="form-control" value="{{$location->duree}}" placeholder="Entrer durée" />
   </div>
   <div class="form-group">
    <input type="number" name="prix" class="form-control" value="{{$location->prix}}" placeholder="Entrer prix" />
   </div>
   <div class="form-group">
       <input type="textfield" name="detailles" class="form-control" value="{{$location->detailles}}" placeholder="Entrer detailles" />
      </div>
      <div class="form-group">
       <input type="number" name="id_client" class="form-control" value="{{$location->id_client}}" placeholder="Entrer prix" />
      </div>
    <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Editer" />
   </div>
  </form>
 </div>
</div>

@endsection