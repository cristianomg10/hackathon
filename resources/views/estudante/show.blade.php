@extends('../layout')

@section('header')
    <h1 class="display-4">Estudante: {{$estudante->nome}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">ID TURMA CURSO</th>
            <th scope="col">ID USUARIO</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$estudante->id}}</td>
            <td>{{$estudante->nome}}</td>
            <td>{{$estudante->id_turma_curso}}</td>
            <td>{{$estudante->id_usuario}}</td>
            <td>{{$estudante->created_at}}</td>
            <td>{{$estudante->updated_at}}</td>
            <td>{{$estudante->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/estudante"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



