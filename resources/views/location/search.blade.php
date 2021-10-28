@extends('master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="">
                <h2>Rechercher une location</h2>
                <div class="form-group">
                    <input type="text" name="q" placeholder="Rechercher une location...!" class="form-control"/>
                    <input type="submit" class="btn btn-primary" value="Rechercher"/>
                </div>
            </form>
        </div>
        <div class="col-md-10">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>date</th>
                    <th>duree</th>
                    <th>prix</th>
                    <th>detailles</th>
                    <th>id_client</th>
                    
                   </tr>
                @foreach($data as $Member)
                <tr>
                    <td>{{$Member->id}}</td>
                    <td>{{$Member->date}}</td>
                    <td>{{$Member->duree}}</td>
                    <td>{{$Member->prix}}</td>
                    <td>{{$Member->detailles}}</td>
                    <td>{{$Member->id_client}}</td>
                </tr>
                @endforeach
            </table>
            {{ $data->links() }}
        </div>
    </div>
</div>
@endsection