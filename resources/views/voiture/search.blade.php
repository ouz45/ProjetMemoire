@extends('master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="">
                <h2>Rechercher une voiture</h2>
                <div class="form-group">
                    <input type="text" name="q" placeholder="Trouver ou rechercher une voiture...!" class="form-control"/>
                    <input type="submit" class="btn btn-primary" value="Rechercher"/>
                </div>
            </form>
        </div>
        <div class="col-md-10">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>Matricule</th>
                    <th>Marque</th>
                    <th>Modele</th>
                    
                   </tr>
                @foreach($data as $Member)
                <tr>
                    <td>{{$Member->id}}</td>
                    <td>{{$Member->Matricule}}</td>
                    <td>{{$Member->Marque}}</td>
                    <td>{{$Member->Modele}}</td>
                </tr>
                @endforeach
            </table>
            {{ $data->links() }}
        </div>
    </div>
</div>
@endsection