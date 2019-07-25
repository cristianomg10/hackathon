@extends('../layout')

@section('header')
    <h1 class="display-4">{{$Alvos->id}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID CURSO</th>
            <th scope="col">ID VAGA</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$Alvos->id}}</td>
            <td>{{$Alvos->id_curso}}</td>
            <td>{{$Alvos->id_vaga}}</td>
            <td>{{$Alvos->created_at}}</td>
            <td>{{$Alvos->updated_at}}</td>
            <td>{{$Alvos->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/alvos"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



