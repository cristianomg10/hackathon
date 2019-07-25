@extends('../layout')

@section('header')
    <h1 class="display-4">{{$Resposta->id}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID ENQUETE</th>
            <th scope="col">ID OPÇÃO ENQUETE</th>
            <th scope="col">ID USUÁRIO</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$Resposta->id}}</td>
            <td>{{$Resposta->id_enquete}}</td>
            <td>{{$Resposta->id_opcao_enquete}}</td>
            <td>{{$Resposta->id_usuario}}</td>
            <td>{{$Resposta->created_at}}</td>
            <td>{{$Resposta->updated_at}}</td>
            <td>{{$Resposta->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/respostas"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



