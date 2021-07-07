@extends('../layout')

@section('header')
    <h1 class="display-4">Curso: {{$Curso->nome}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">ID INSTIUIÇÃO</th>
            <th scope="col">TURNO</th>
            <th scope="col">NÍVEL</th>
            <th scope="col">ID CIDADE</th>
            <th scope="col">ANO INICIAL</th>
            <th scope="col">SEMESTRE INICIAL</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$Curso->id}}</td>
            <td>{{$Curso->nome}}</td>
            <td>{{$Curso->id_instituicao}}</td>
            <td>{{$Curso->turno}}</td>
            <td>{{$Curso->nivel}}</td>
            <td>{{$Curso->id_cidade}}</td>
            <td>{{$Curso->ano_inicial_oferta}}</td>
            <td>{{$Curso->semestre_inicial_oferta}}</td>
            <td>{{$Curso->created_at}}</td>
            <td>{{$Curso->updated_at}}</td>
            <td>{{$Curso->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/cursos"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



