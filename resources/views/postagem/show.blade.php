@extends('../layout')

@section('header')
    <h1 class="display-4">{{$Postagem->titulo}}</h1>
@endsection

@section('content')

    <table class="table bg-light rounded">
        <thead class="col-12"style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TÍTULO</th>
            <th scope="col">POSTAGEM</th>
            <th scope="col">STATUS</th>
            <th scope="col">ÚLTIMA ATUALIZAÇÃO</th>
            <th scope="col">ID POSTAGEM</th>
            <th scope="col">ID USUARIO</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody >
        <tr>
            <td>{{$Postagem->id}}</td>
            <td>{{$Postagem->titulo}}</td>
            <td>{{$Postagem->postagem}}</td>
            <td>{{$Postagem->status}}</td>
            <td>{{$Postagem->ultima_atualizacao}}</td>
            <td>{{$Postagem->id_postagem}}</td>
            <td>{{$Postagem->id_usuario}}</td>
            <td>{{$Postagem->created_at}}</td>
            <td>{{$Postagem->updated_at}}</td>
            <td>{{$Postagem->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/postagens"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



