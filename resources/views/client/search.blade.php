@extends('master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="">
                <h2>Rechercher un client</h2>
                <div class="form-group">
                    <input type="text" name="q" placeholder="Trouver ou rechercher une voiture...!" class="form-control"/>
                    <input type="submit" class="btn btn-primary" value="Rechercher"/>
                </div>
            </form>
        </div>
        <div class="col-md-10">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    
                   </tr>
                @foreach($data as $Member)
                <tr>
                    <td>{{$Member->id}}</td>
                    <td>{{$Member->prenom}}</td>
                    <td>{{$Member->nom}}</td>
                    <td>{{$Member->email}}</td>
                    <td>{{$Member->phone}}</td>
                    <td>{{$Member->add}}</td>
                </tr>
                @endforeach
            </table>
            {{ $data->links() }}
        </div>
    </div>
</div>
@endsection