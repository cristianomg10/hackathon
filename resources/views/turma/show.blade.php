@extends('../layout')

@section('header')
    <h1 class="display-4">{{$Turma->nome}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">ID CURSO</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$Turma->id}}</td>
            <td>{{$Turma->nome}}</td>
            <td>{{$Turma->id_curso}}</td>
            <td>{{$Turma->created_at}}</td>
            <td>{{$Turma->updated_at}}</td>
            <td>{{$Turma->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/turmas"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



