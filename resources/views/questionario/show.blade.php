@extends('../layout')

@section('header')
    <h1 class="display-4">Questionário: *{{$Questionarios->titulo}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TITULO</th>
            <th scope="col">VALIDADE</th>
            <th scope="col">ID USÚARIO</th>
            <th scope="col">STATUS</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$Questionarios->id}}</td>
            <td>{{$Questionarios->titulo}}</td>
            <td>{{$Questionarios->validade}}</td>
            <td>{{$Questionarios->id_usuario}}</td>
            <td>{{$Questionarios->status}}</td>
            <td>{{$Questionarios->created_at}}</td>
            <td>{{$Questionarios->updated_at}}</td>
            <td>{{$Questionarios->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/questionarios"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



